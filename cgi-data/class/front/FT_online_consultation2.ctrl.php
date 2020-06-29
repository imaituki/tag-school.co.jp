<?php
//----------------------------------------------------------------------------
// 作成日： 2018/03/27
// 作成者： 福嶋
// 内  容： 予約操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_online_consultation2 {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// XML操作クラス
	var $_FN_xml = null;

	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_online_consultation2";
	var $_CtrTablePk = "id_online_consultation2";

	// コントロール機能（ログ用）
	var $_CtrLogName = "オンライン面談予約";


	//-------------------------------------------------------
	// 関数名：__construct
	// 引  数：$xmlPath : XMLパス
	// 戻り値：なし
	// 内  容：コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn = null, $xmlPath = null ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}

		if( $xmlPath != null ){
					$this->_FN_xml = new FN_xml( $xmlPath );
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
	function check( &$arrVal ) {

		// グローバル変数
		global $_Setting;

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "ご希望日時" , "date"   , $arrVal["date"]  , array( "CHECK_EMPTY", "CHECK_DATE", "CHECK_DATE_START_TERM" ), date( "Y-m-d" ), null, "<" );
		$objInputCheck->entryData( "ご希望日時" , "time"   , $arrVal["time"]  , array( "CHECK_EMPTY_ZERO", "CHECK_NUM" ), null, null );
		$objInputCheck->entryData( "担当講師" , "teacher"   , $arrVal["teacher"]   , array( "CHECK_NUM" ), null, null );
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

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// $t_reserve_setting = $this->GetReserveSetting(1);
		$chk = $this->_DBconn->selectCtrl( array( "select" => "*", "from" => $this->_CtrTable, "where" => "delete_flg = 0 AND cancel_flg = 0 AND date =  '"  . $arrVal["date"] . "' AND time = '" . $arrVal["time"] . "' AND teacher = '" . $arrVal["teacher"] . "'", "order"  => "date ASC" ), array( "fetch" => _DB_FETCH_ALL ) );

		if( count( $chk ) >= 1 ) {
			if( empty($res["ng"]["date"] ) ){
				$res["ng"]["date"] = NULL;
			}
			$res["ng"]["date"] .= "指定日時は既に予約上限に達しています。<br />";
		}

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名：GetArrayXml
	// 引  数：なし
	// 戻り値：XML配列データ
	// 内  容：XML配列データを取得
	//-------------------------------------------------------
	function GetArrayXml() {
		return $this->_FN_xml->GetArrayXml( null, true, null );
	}


	//-------------------------------------------------------
	// 関数名：GetAttrXml
	// 引  数：$xml - xml配列データ
	// 戻り値：XML属性データ
	// 内  容：XML属性データを取得
	//-------------------------------------------------------
	function GetAttrXml( $xml ) {
		return $this->_FN_xml->GetAttrXml( $xml );
	}


	//-------------------------------------------------------
	// 関数名：GetDataXml
	// 引  数：$xml - xml配列データ
	// 戻り値：XMLデータ
	// 内  容：XMLデータを取得
	//-------------------------------------------------------
	function GetDataXml( $xml ) {
		return $this->_FN_xml->GetDataXml( $xml );
	}


	//-------------------------------------------------------
	// 関数名：insert
	// 引  数：$arrVal - 登録データ（ 'カラム名' => '値' ）
	//       ：$arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値：なし
	// 内  容：データ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {

		// アップ処理
		//$ImageInfo = $this->_FN_file->copyImage( $_FILES, $this->_ARR_IMAGE, $arrVal );

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
	// 関数名: GetReserveSetting
	// 引  数: $id   - ID
	// 戻り値: 1件分
	// 内  容: 設定内容を1件取得する
	//-------------------------------------------------------
	function GetReserveSetting( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "*",
							   "from"   => "t_online_consultation_setting",
							   "where"  => "id_online_consultation_setting = " . $id );

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

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
	function GetSearchCount( $date, $time, $teacher ) {

		// SQL配列
		$creation_kit = array(  "select" => "COUNT(id_online_consultation)",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 AND
											 cancel_flg = 0 AND
											 date = '". $date. "' AND
											 time = '". $time. "' AND
											 teacher = '" . $teacher . "'",
								"order"  => "date ASC"
							);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ONE) );

		// 戻り値
		return $res;

	}

}

?>
