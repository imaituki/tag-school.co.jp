<?php
//----------------------------------------------------------------------------
// 作成日： 2018/03/28
// 作成者： 牧
// 内  容： カレンダー情報操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_online_consultation {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_online_consultation";
	var $_CtrTablePk = "id_online_consultation";

	// コントロール機能（ログ用）
	var $_CtrLogName = "オンライン面談予約";

	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$dbconn  ： DB接続オブジェクト
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}

	}


	//-------------------------------------------------------
	// 関数名：__destruct
	// 引  数：なし
	// 戻り値：なし
	// 内  容：デストラクタ
	//-------------------------------------------------------
	function __destruct() {

	}

	//-------------------------------------------------------
	// 関数名：convert
	// 引  数：$arrVal
	// 戻り値：データ変換
	// 内  容：データ変換を行う
	//-------------------------------------------------------
	function convert( $arrVal ) {

		// データ変換クラス宣言
		$objInputConvert = new FN_input_convert( $arrVal, "UTF-8" );

		// 変換エントリー
		$objInputConvert->entryConvert( "ruby2", array( "ENC_KANA" ), "KCV" );
		$objInputConvert->entryConvert( "mail", array( "ENC_KANA" ), "a" );
		$objInputConvert->entryConvert( "tel", array( "ENC_KANA" ), "a" );
		$objInputConvert->entryConvert( "ruby1", array( "ENC_KANA" ), "KCV" );

		// 変換実行
		$objInputConvert->execConvertAll();

		// 戻り値
		return $objInputConvert->GetData();

	}

	//-------------------------------------------------------
	// 関数名：check2
	// 引  数：$arrVal
	// 戻り値：エラーメッセージ
	// 内  容：データチェック
	//-------------------------------------------------------
	function check( &$arrVal, $mode ) {

		// グローバル変数
		global $_Setting;

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		// $objInputCheck->entryData( "ご希望日時" , "date"   , $arrVal["date"]  , array( "CHECK_EMPTY", "CHECK_DATE", "CHECK_DATE_START_TERM" ), date( "Y-m-d", strtotime( "+1 day" ) ), null );
		$objInputCheck->entryData( "ご希望日時" , "date"   , $arrVal["date"]  , array( "CHECK_EMPTY", "CHECK_DATE" ), null, null );
		$objInputCheck->entryData( "ご希望日時" , "time"   , $arrVal["time"]  , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "保護者氏名" , "name2"  , $arrVal["name2"] , array( "CHECK_EMPTY", "CHECK_MAX_LEN" ), null, 255 );
		$objInputCheck->entryData( "保護者氏名(フリガナ)"    , "ruby2"   , $arrVal["ruby2"]   , array( "CHECK_EMPTY", "CHECK_KANA", "CHECK_MAX_LEN" ), null, 255 );
		$objInputCheck->entryData( "Eメールアドレス", "mail"   , $arrVal["mail"]   , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN", "CHECK_MAIL" ), 0, 255 );
		$objInputCheck->entryData( "電話番号" , "tel"   , $arrVal["tel"]   , array( "CHECK_EMPTY", "CHECK_TEL", "CHECK_MIN_MAX_LEN" ), 10, 14 );
		$objInputCheck->entryData( "郵便番号" , "zip"   , $arrVal["zip"]   , array( "CHECK_ZIP", "CHECK_MAX_LEN" ), null, 8 );
		$objInputCheck->entryData( "都道府県" , "prefecture"   , $arrVal["prefecture"]   , array( "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "住所"    , "address"   , $arrVal["address"]   , array( "CHECK_MAX_LEN" ), null, 255 );
		$objInputCheck->entryData( "児童・生徒氏名"    , "name1"   , $arrVal["name1"]   , array( "CHECK_MAX_LEN" ), null, 255 );
		$objInputCheck->entryData( "児童・生徒氏名(フリガナ)"    , "ruby1"   , $arrVal["ruby1"]   , array( "CHECK_KANA", "CHECK_MAX_LEN" ), null, 255 );
		$objInputCheck->entryData( "性別" , "sex"   , $arrVal["sex"]   , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "学年" , "grade"   , $arrVal["grade"]   , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );

		$chk_update = NULL;

		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "ID", "all", $arrVal["id_online_consultation"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
			// $chk_update = "AND id_online_consultation != '" . $arrVal["id_online_consultation"] . "'";
		}

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// 予約数上限チェック（INSERT時）
		if( empty( $arrVal["cancel_flg"] ) ) {
			$chk = $this->_DBconn->selectCtrl( array( "select" => "*", "from" => $this->_CtrTable, "where" => "delete_flg = 0 AND cancel_flg = 0 AND date =  '"  . $arrVal["date"] . "' AND time = '" . $arrVal["time"] . "'", "order"  => "date ASC" ), array( "fetch" => _DB_FETCH_ALL ) );

			if( count( $chk ) >= $_Setting["max_number"] && strcmp( $mode, "insert" ) == 0 ) {
				if( empty($res["ng"]["date"] ) ){
					$res["ng"]["date"] = NULL;
				}
				$res["ng"]["date"] .= "指定日時は既に予約上限に達しています。<br />";
			}
		}

		// 戻り値
		return $res;

	}
	//-------------------------------------------------------
	// 関数名：insert
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ登録
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
	// 関数名：update
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );
		if( !empty( $arrVal["cancel_flg"] ) && is_array( $arrVal["cancel_flg"] ) ) {
			$arrVal["cancel_flg"] = implode( ",", $arrVal["cancel_flg"] );
		}else{
			$arrVal["cancel_flg"] = 0;
		}
		// 更新条件
		$where = $this->_CtrTablePk . " = " . $arrVal["id_online_consultation"];

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：delete
	// 引  数：$id - 削除するID
	// 戻り値：true - 正常, false - 異常
	// 内  容：データ削除
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, array( "delete_flg" => 1 ), null, $this->_CtrTablePk . " = " . $id );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：changeDisplay
	// 引  数：$id  - ID
	//       ：$flg - フラグ
	// 戻り値：true - 正常, false - 異常
	// 内  容：表示切り替え
	//-------------------------------------------------------
	function changeDisplay( $id, $flg ) {

		// 初期化
		$res = false;

		// 切り替え処理
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_flg" => $flg ), null, $this->_CtrTablePk . " = " . $id );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名：GetSearchList
	// 引  数：$search - 検索条件
	//       ：$option - 取得条件
	// 戻り値：リスト
	// 内  容：検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 ",
								"order"  => "date ASC"
							);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], "title", "LIKE", "OR", "%string%" ) . " ) ";
		}

		if( !empty( $search["search_date_start"] ) ) {
			$creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_start"] . "'", $this->_CtrTable . ".date", " >= ", null, null ) . " ";
		}
		if( !empty( $search["search_date_end"] ) ) {
			$creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_end"] . "'", $this->_CtrTable . ".date", " <= ", null, null ) . " ";
		}

		if( !empty( $search["category"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["category"], "category", "LIKE", null, "%string%" ) . " ) ";
		}

		// 取得条件
		if( empty( $option ) ) {

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => ( !empty( $search["page"] ) ) ? $search["page"] : 1,
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
	// 関数名：GetSearchCalendarList
	// 引  数：検索条件
	// 戻り値：予約リスト
	// 内  容：予約検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchCalendarList( $search ) {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 ",
								"order"  => "date ASC, time ASC"
							);

		// 検索条件
		if( !empty( $search["search_date_start"] ) ) {
			// $creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_start"] . "'", $this->_CtrTable . ".date", " >= ", null, null ) . " ";
			$creation_kit["where"] .= "AND " . $this->_CtrTable . ".date >= '". $search["search_date_start"] . "' ";
		}
		if( !empty( $search["search_date_end"] ) ) {
			// $creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_end"] . "'", $this->_CtrTable . ".date", " <= ", null, null ) . " ";
			$creation_kit["where"] .= "AND " . $this->_CtrTable . ".date <= '". $search["search_date_end"] . "' ";
		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ALL ) );

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名：GetIdRow
	// 引  数：$id - ID
	// 戻り値：1件分のデータ
	// 内  容：1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "*",
							   "from"   => $this->_CtrTable,
							   "where"  => $this->_CtrTablePk . " = " . $id );

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// 戻り値
		return $res;

	}

}

?>
