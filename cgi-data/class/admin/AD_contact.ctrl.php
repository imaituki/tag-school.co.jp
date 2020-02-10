<?php
//----------------------------------------------------------------------------
// 作成日: 2019/10/21
// 作成者: 岡田
// 内  容: お問い合わせ操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_contact {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_contact";
	var $_CtrTablePk = "id_contact";

	// コントロール機能（ログ用）
	var $_CtrLogName = "お問い合わせ";


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn  :  DB接続オブジェクト
	// 戻り値: なし
	// 内  容: コンストラクタ
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
	// 関数名: __destruct
	// 引  数: なし
	// 戻り値: なし
	// 内  容: デストラクタ
	//-------------------------------------------------------
	function __destruct() {}


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
		//$objInputConvert->entryConvert( "url", array( "ENC_KANA" ), "a" );

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

		// nonceチェック
		if( isset( $arrVal["_nonce"] ) && !isMatchNonce( $arrVal["_nonce"] ) ){
			http_response_code( 400 );
			exit;
		}

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "お問い合わせID", "all", $arrVal["id_contact"], array("CHECK_EMPTY", "CHECK_NUM"), null, null );
		}

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

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

		// 更新条件
		$where = $this->_CtrTablePk . " = ?";

		$bind = array( $arrVal["id_contact"] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: delete
	// 引  数: $id - 削除するお問い合わせID
	// 戻り値: true - 正常, false - 異常
	// 内  容: お問い合わせデータ削除
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 削除処理
		if( !empty($id) ) {
			// 更新
			$res = $this->_DBconn->delete( $this->_CtrTable, $this->_CtrTablePk . " = ? ", array($id) );

		}
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
		$res = $this->_DBconn->update( $this->_CtrTable, array( "check_flg" => $flg ), null, $this->_CtrTablePk . " = ?", array($id) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetSearchList
	// 引  数: $search - 検索条件
	//       : $option - 取得条件
	// 戻り値: お問い合わせリスト
	// 内  容: お問い合わせ検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {

		// SQL配列
		$creation_kit = array(
			"select" => "*",
			"from"   => $this->_CtrTable,
			"where"  => "1 ",
			"order"  => "check_flg ASC, entry_date DESC",
			"bind"   => array()
		);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], "title", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
		}

		// 取得条件
		if( empty( $option ) ) {

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


		if( is_array($res["data"]) ) {
			foreach( $res["data"] as $key => $val ) {
				if( !empty($res["data"][$key]["course"]) ) {
					$res["data"][$key]["course"] = explode( ",", $res["data"][$key]["course"] );
				}
			}
		} elseif( is_array($res) ) {
			foreach( $res as $key => $val ) {
				if( !empty($res[$key]["course"]) ) {
					$res[$key]["course"] = explode( ",", $res[$key]["course"] );
				}
			}
		}

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名: GetIdRow
	// 引  数: $id - お問い合わせID
	// 戻り値: お問い合わせ
	// 内  容: お問い合わせを1件取得する
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
			"where"  => $this->_CtrTablePk . " = ? ",
			"bind"   => array( $id )
		);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH) );

		// 戻り値
		return $res;

	}

}
?>