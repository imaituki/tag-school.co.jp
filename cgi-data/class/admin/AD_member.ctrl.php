<?php
//----------------------------------------------------------------------------
// 作成日: 2019/12/25
// 作成者: yamada
// 内  容: 会員操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_member {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_member";
	var $_CtrTablePk = "id_member";

	// コントロール機能（ログ用）
	var $_CtrLogName = "会員";

	//-------------------------------------------------------
	// 関数名:__construct
	// 引  数:$dbconn  : DB接続オブジェクト
	// 戻り値:なし
	// 内  容:コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn ) {

		// クラス宣言
		if( !empty($dbconn) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}

	}


	//-------------------------------------------------------
	// 関数名:__destruct
	// 引  数: なし
	// 戻り値: なし
	// 内  容: デストラクタ
	//-------------------------------------------------------
	function __destruct() {

	}

	//-------------------------------------------------------
	// 関数名: convert
	// 引  数: $arrVal
	// 戻り値: データ変換
	// 内  容: データ変換を行う
	//-------------------------------------------------------
	function convert( $arrVal ) {

		// データ変換クラス宣言
		$objInputConvert = new FN_input_convert( $arrVal, "UTF-8" );

		// 変換エントリー
		$objInputConvert->entryConvert( "zip"     , array("ENC_KANA")           , "n" );
		// $objInputConvert->entryConvert( "zip2"    , array("ENC_KANA")           , "n" );
		$objInputConvert->entryConvert( "mail"    , array("ENC_KANA", "STR_LOW"), "a" );
		$objInputConvert->entryConvert( "password", array("ENC_KANA")           , "a" );

		// 変換実行
		$objInputConvert->execConvertAll();

		// 戻り値
		return $objInputConvert->GetData();

	}


	//-------------------------------------------------------
	// 関数名: check
	// 引  数: $arrVal
	//       : $mode - チェックモード（ "insert", "update" ）
	// 戻り値: エラーメッセージ
	// 内  容: データチェック
	//-------------------------------------------------------
	function check( &$arrVal, $mode ) {

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );


		// チェックエントリー
		$objInputCheck->entryData( "お名前(姓)", "name1" , $arrVal["name1"] , array("CHECK_EMPTY"), null, null );
		$objInputCheck->entryData( "お名前(名)", "name2" , $arrVal["name2"] , array("CHECK_EMPTY"), null, null );
		$objInputCheck->entryData( "フリガナ(姓)", "ruby1" , $arrVal["ruby1"] , array("CHECK_EMPTY" , "CHECK_MIN_MAX_LEN", "CHECK_KANA"), 0, 30 );
		$objInputCheck->entryData( "フリガナ(名)", "ruby2" , $arrVal["ruby2"] , array("CHECK_EMPTY" , "CHECK_MIN_MAX_LEN", "CHECK_KANA"), 0, 30 );
		$objInputCheck->entryData( "電話番号", "tel" , $arrVal["tel"] , array("CHECK_EMPTY", "CHECK_TEL", "CHECK_MAX_LEN"), 10, 14 );
		$objInputCheck->entryData( "Eメールアドレス", "mail" , $arrVal["mail"] , array("CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN"), 0, 255 );
		$objInputCheck->entryData( "郵便番号", "zip" , $arrVal["zip"] , array("CHECK_EMPTY", "CHECK_ZIP", "CHECK_MIN_MAX_LEN"), 7, 8 );
		$objInputCheck->entryData( "都道府県", "prefecture" , $arrVal["prefecture"] , array("CHECK_EMPTY_ZERO"), null, null );
		$objInputCheck->entryData( "市区町村", "address1" , $arrVal["address1"] , array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 0, 255 );
		$objInputCheck->entryData( "番地 / 建物・マンション名", "address2" , $arrVal["address2"] , array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 0, 255 );

		// チェックエントリー（UPDATE時）
		if( strcmp($mode, "update") == 0 ) {
			$objInputCheck->entryData( "会員ID", "all", $arrVal["id_member"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		}

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// メールアドレス重複Check
		// 追加条件
		if ( strcmp($mode, "update") == 0 ) {
			$where = " AND NOT( " . $this->_CtrTablePk . " = '" . $arrVal["id_member"] . "' ) ";
		}else{
			$where = "";
		}
		$chk = $this->_DBconn->_ADODB->GetOne( "SELECT mail	FROM " . $this->_CtrTable . " WHERE mail = '" . $arrVal["mail"] . "' " . $where );

		if( !empty($chk) ) {
			$res["ng"]["mail"] .= "指定のメールアドレスは、既に登録されています。<br />";
		}


		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: insert
	// 引  数: $arrVal - 登録データ（ 'カラム名' => '値' ）
	//       : $arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値: なし
	// 内  容: お知らせデータ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = fn_encrypt( $arrVal["password"], _CRYPTKEY );
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: update
	// 引  数: $arrVal - 登録データ（ 'カラム名' => '値' ）
	//       : $arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値: なし
	// 内  容: お知らせデータ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

 		// パスワード
		if( !empty($arrVal["password"]) ) {
			$arrVal["password"] = fn_encrypt( $arrVal["password"], _CRYPTKEY );
		} else {
			unset( $arrVal["password"] );
		}

		// 更新条件
		$where = $this->_CtrTablePk . " = ?";
		$bind  = array( $arrVal["id_member"] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: delete
	// 引  数: $id - 削除するお知らせID
	// 戻り値: true - 正常, false - 異常
	// 内  容: お知らせデータ削除
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 更新
		$res = $this->_DBconn->delete( $this->_CtrTable, $this->_CtrTablePk . " = ?", array($id) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: changeDisplay
	// 引  数: $id  - ID
	//       : $flg - フラグ
	// 戻り値: true - 正常, false - 異常
	// 内  容: 表示切り替え
	//-------------------------------------------------------
	function changeDisplay( $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_flg" => $flg ), null, $this->_CtrTablePk . " = ?", array($id) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetSearchList
	// 引  数: $search - 検索条件
	//       : $option - 取得条件
	// 戻り値: お知らせリスト
	// 内  容: お知らせ検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {

		// SQL配列
		$creation_kit = array(
			"select" =>"*",
			"from"   => $this->_CtrTable,
			"where"  => "1 ",
			"order"  => "delete_flg ASC, entry_date DESC",
			"bind"   => array()
		);
		// 検索条件
		if( !empty($search["search_keyword"]) ){
			$creation_kit["where"] .= "AND ( ". 
				$this->_DBconn->createWhereSql( $search["search_keyword"], "name1", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ). " OR ". 
				$this->_DBconn->createWhereSql( $search["search_keyword"], "name2", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ). " OR ". 
				$this->_DBconn->createWhereSql( $search["search_keyword"], "ruby1", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ). " OR ". 
				$this->_DBconn->createWhereSql( $search["search_keyword"], "ruby2", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ). 
			" ) ";
		}
		// メールマガジン配信希望
		if( !empty($search["search_mail_magazine_flg"]) ){
			$creation_kit["where"] .= " AND mail_magazine_flg = ? ";
			$creation_kit["bind"][] = $search["search_mail_magazine_flg"];
		}
		// 本登録か仮登録か
		if( $search["search_regist_flg"] > 0 ){
			if( $search["search_regist_flg"] == 1 ){ // 本登録を対象
				$creation_kit["where"] .= " AND password IS NOT NULL ";
			}elseif( $search["search_regist_flg"] == 2 ){ // 仮登録を対象
				$creation_kit["where"] .= " AND (password IS NULL OR password = '') ";
			}
		}
		// 退会済みかどうか
		if( is_numeric($search["search_delete_flg"]) ){
			if( $search["search_delete_flg"] == 1 ){ // 現会員のみ
				$creation_kit["where"] .= " AND delete_flg = 1 ";
			}elseif( $search["search_regist_flg"] == 0 ){ // 退会済みのみ
				$creation_kit["where"] .= " AND delete_flg = 0 ";
			}
		}

		// 取得条件
		if( empty($option) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => ( !empty($search["page"]) ) ? $search["page"] : 1,
								 "PageShowLimit"   => _PAGESHOWLIMIT,
								 "PageNaviLimit"   => _PAGENAVILIMIT,
								 "LinkSeparator"   => " | ",
								 "PageUrlFreeMode" => 1,
								 "PageFileName"    => "javascript:changePage(%d);" );

			// オプション
			$option = array( "fetch" => _DB_FETCH_ALL,
							 "page"  => $_PAGE_INFO );

		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, $option );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetIdRow
	// 引  数: $id - お知らせID
	// 戻り値: お知らせ
	// 内  容: お知らせを1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric($id) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array(
			"select" => "*",
			"from"   => $this->_CtrTable,
			"where"  => $this->_CtrTablePk . " = ?",
			"bind"   => array($id)
		);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH) );

		// 戻り値
		return $res;

	}

}
?>