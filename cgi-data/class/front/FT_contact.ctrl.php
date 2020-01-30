<?php
//----------------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: お問い合わせ操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_contact {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable    = "t_contact";
	var $_CtrTablePk  = "id_contact";

	// XML操作クラス
	var $_FN_xml = null;


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn  : DB接続情報
	//         $xmlPath : XMLパス
	// 戻り値: なし
	// 内  容: コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn = null, $xmlPath = null ) {
		// クラス宣言
		if( !empty($dbconn) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}

		if( $xmlPath != null ){
			$this->_FN_xml = new FN_xml( $xmlPath );
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
		$objInputConvert->entryConvert( "mail", array("ENC_KANA"), "a" );
		$objInputConvert->entryConvert( "zip", array("ENC_KANA"),  "n" );

		// 変換実行
		$objInputConvert->execConvertAll();

		// 戻り値
		return $objInputConvert->GetData();
	}


	//-------------------------------------------------------
	// 関数名: check
	// 引  数: $arrVal
	// 戻り値: エラーメッセージ
	// 内  容: データチェック
	//-------------------------------------------------------
	function check( &$arrVal ) {

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "生徒氏名", "name1", $arrVal["name1"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "生徒氏名(フリガナ)", "ruby1", $arrVal["ruby1"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN", "CHECK_KANA" ), 0, 255 );
		$objInputCheck->entryData( "学年", "grade", $arrVal["grade"], array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "保護者氏名", "name2", $arrVal["name2"], array( "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "保護者氏名(フリガナ)", "ruby2", $arrVal["ruby2"], array( "CHECK_MIN_MAX_LEN", "CHECK_KANA" ), 0, 255 );
		$objInputCheck->entryData( "Eメールアドレス", "mail", $arrVal["mail"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN", "CHECK_MAIL" ), 0, 255 );
		$objInputCheck->entryData( "電話番号", "tel", $arrVal["tel"], array( "CHECK_EMPTY", "CHECK_TEL", "CHECK_MIN_MAX_LEN" ), 10, 14 );

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: insert
	// 引  数: $arrVal     - 登録データ（ 'カラム名' => '値' ）
	//       : $arrSql     - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値: なし
	// 内  容: データ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {

		// 不要データ削除
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );

		// 登録データの作成
		$arrVal["check_flg"]   = 0;
		$arrVal["entry_date"]  = date( "Y-m-d H:i:s" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 登録
		$res = $this->_DBconn->insert( $this->_CtrTable, $arrVal, $arrSql );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetArrayXml
	// 引  数: なし
	// 戻り値: XML配列データ
	// 内  容: XML配列データを取得
	//-------------------------------------------------------
	function GetArrayXml() {
		return $this->_FN_xml->GetArrayXml( null, true, null );
	}


	//-------------------------------------------------------
	// 関数名: GetAttrXml
	// 引  数: $xml - xml配列データ
	// 戻り値: XML属性データ
	// 内  容: XML属性データを取得
	//-------------------------------------------------------
	function GetAttrXml( $xml ) {
		return $this->_FN_xml->GetAttrXml( $xml );
	}


	//-------------------------------------------------------
	// 関数名: GetDataXml
	// 引  数: $xml - xml配列データ
	// 戻り値: XMLデータ
	// 内  容: XMLデータを取得
	//-------------------------------------------------------
	function GetDataXml( $xml ) {
		return $this->_FN_xml->GetDataXml( $xml );
	}

}
?>
