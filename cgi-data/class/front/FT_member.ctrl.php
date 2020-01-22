<?php
//----------------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: Mypage 会員操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_member {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable    = "mst_member";
	var $_CtrTablePk  = "id_member";

	// XML操作クラス
	var $_FN_xml = null;


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn  : DB接続情報
	//       : $xmlPath : XMLパス
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

		// XMLクラス宣言
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
	// 関数名: check 必ずupdateで用いられる
	// 引  数: $arrVal
	// 戻り値: エラーメッセージ
	// 内  容: データチェック
	//-------------------------------------------------------
	function check( &$arrVal, $mode = NULL ) {

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "お名前(姓)", "name1", $arrVal["name1"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 0, 30 );
		$objInputCheck->entryData( "お名前(名)", "name2", $arrVal["name2"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 0, 30 );
		$objInputCheck->entryData( "フリガナ(姓)", "ruby1", $arrVal["ruby1"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN", "CHECK_KANA"), 0, 30 );
		$objInputCheck->entryData( "フリガナ(名)", "ruby2", $arrVal["ruby2"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN", "CHECK_KANA"), 0, 30 );
		$objInputCheck->entryData( "メールアドレス", "mail", $arrVal["mail"], array("CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN"), 0, 160 );
		if( $arrVal["first_flg"] == 1 ){
			// 本登録の場合はパスワードが必須
			$objInputCheck->entryData( "パスワード", "password", $arrVal["password"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 8, 32 );
		}else{
			// 更新の場合はパスワードが任意
			$objInputCheck->entryData( "パスワード", "password", $arrVal["password"], array("CHECK_MIN_MAX_LEN"), 8, 32 );
		}
		$objInputCheck->entryData( "電話番号", "tel", $arrVal["tel"], array("CHECK_EMPTY", "CHECK_TEL", "CHECK_MIN_MAX_LEN"), 10, 14 );
		$objInputCheck->entryData( "郵便番号", "zip", $arrVal["zip"], array("CHECK_EMPTY", "CHECK_ZIP", "CHECK_MIN_MAX_LEN"), 7, 8 );
		$objInputCheck->entryData( "都道府県", "prefecture", $arrVal["prefecture"], array("CHECK_EMPTY_ZERO"), null, null );
		$objInputCheck->entryData( "市区町村", "address1", $arrVal["address1"], array("CHECK_EMPTY"), null, null );
		$objInputCheck->entryData( "番地/建物・マンション名", "address2"   , $arrVal["address2"]     , array( "CHECK_EMPTY" ), null, null );

		// チェックエントリー（UPDATE時）
		$objInputCheck->entryData( "会員ID", "all", $arrVal["id_member"], array("CHECK_EMPTY", "CHECK_NUM"), null, null );

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// メールチェック(更新の時は自分のIDを除外する)
		if( !empty($arrVal["mail"]) && strcmp($mode, "update") == 0 ) {
			$res = $this->check_mail( $arrVal, "update" );
			
		}

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: check_mail
	// 引  数: $arrVal
	//         $mode
	// 戻り値: エラーメッセージ(文字列)
	// 内  容: データチェック
	//-------------------------------------------------------
	function check_mail( &$arrVal, $mode = NULL ) {

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "メールアドレス", "mail", $arrVal["mail"], array("CHECK_EMPTY", "CHECK_MAIL", "CHECK_MIN_MAX_LEN"), 0, 160 );
		if( strcmp($mode, "confirm") === 0 ){
			// 本登録
			$objInputCheck->entryData( "パスワード", "password", $arrVal["password"], array("CHECK_EMPTY", "CHECK_MIN_MAX_LEN"), 8, 32 );
		}

		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		// 会員本登録の時のチェック
		if( strcmp($mode, "confirm") === 0 ){
			// 本人確認
			$creation_kit = array(
				"select" => "mail",
				"from"   => $this->_CtrTable,
				"where"  => "mail = ? AND 
							 temp_var = ? AND 
							 delete_flg = 0 ",
				"bind"   => array( $arrVal["mail"], $arrVal["user"] )
			);

			// データ取得
			$user = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ONE) );

			if( empty($user) ) {
				$res["ng"]["password"] = "お送りいただいた仮登録メールに記載されているURLからアクセスしてください。<br />";
			}

			if( strcmp($arrVal["password"], $arrVal["chk_password"]) !== 0 ){
				$res["ng"]["password"] = "入力されたパスワードとパスワード(確認用)が異なります。<br />";
			}
		}

		// メールチェック
		unset( $creation_kit );
		$creation_kit = array(
			"select" => "mail",
			"from"   => $this->_CtrTable,
			"where"  => "mail = ? AND delete_flg = 0 ",
			"bind"   => array( $arrVal["mail"] )
		);

		if( strcmp($mode, "confirm") === 0 || strcmp($mode, "update") === 0 ){
			$creation_kit["where"] .= " AND id_member != ? ";
			$creation_kit["bind"][] = $arrVal["id_member"];
		}

		// データ取得
		$chk = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ONE) );

		if( !empty($chk) ) {
			$res["ng"]["mail"] = "ご入力いただいたメールアドレスは既に登録されています。<br />";
		}

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
	// 内  容: データ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 更新条件
		if( empty($arrVal["id_member"]) ){
			$where = "mail = ? ";
			$bind  = $arrVal["mail"];
		}else{
			$where = $this->_CtrTablePk. " = ? ";
			$bind  = $arrVal["id_member"];
		}

		if( !empty($arrVal["password"]) ) {
			// 入力されていたら、暗号化して保存
			$arrVal["password"] = fn_encrypt( $arrVal["password"], _CRYPTKEY );
		}

		// 顧客更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, array($bind) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: delete
	// 引  数: $id  - ID
	// 戻り値: true - 正常, false - 異常
	// 内  容: 会員退会手続き
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 削除処理
		if( !empty($id) ) {
			// 削除処理
			$res = $this->_DBconn->update( $this->_CtrTable, array("delete_flg" => 1), null, $this->_CtrTablePk . " = ? ", array($id) );
		}

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: login
	// 引  数: $mail - メールアドレス
	//       : $password   - パスワード
	// 戻り値: 結果
	// 内  容: 会員ログイン
	//-------------------------------------------------------
	function login( $mail, $password ) {

		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );

		// チェックエントリー
		$objInputCheck->entryData( "メールアドレス", "mail", $mail, array("CHECK_EMPTY"), null, null );
		$objInputCheck->entryData( "パスワード", "password", $password, array("CHECK_EMPTY"), null, null );

		// チェック実行
		$res["message"]["ng"] = $objInputCheck->execCheckAll();

		// データチェック
		if( empty($res["message"]["ng"]) ) {

			// SQL配列
			$cry_password = fn_encrypt( $password, _CRYPTKEY );
			$creation_kit = array(
				"select" => "id_member, name1, name2, mail",
				"from"   => $this->_CtrTable,
				"where"  => "delete_flg = 0 AND 
							 mail = ? AND
							( password = ? OR (temp_password = ? AND NOW() <= temp_time_limit) )",
				"bind"   => array( $mail, $cry_password, $cry_password )
			);

			// 会員データ取得
			$mst_member = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH) );

			// ログインチェック
			if( $mst_member["id_member"] != "" ) {

				// SESSION ID
				$mst_member["ssid"] = session_id();

				// クッキーに保管するデータを暗号化
				$mst_member["name1"] = fn_encrypt( $mst_member["name1"], _CRYPTKEY );
				$mst_member["name2"] = fn_encrypt( $mst_member["name2"], _CRYPTKEY );
				$mst_member["mail"]  = fn_encrypt( $mst_member["mail"] , _CRYPTKEY );

				// クッキー保管期間（1日間）
				$cookie_limit = time() + 60 * 60 * 24;

				// クッキー設定
				foreach( $mst_member as $key => $val ) {

					// 一度クリア
					@setcookie( "mem_" . $key , ""  , time() - 3600, "/" );

					// 設定
					if( is_array($val) ) {
						@setcookie( "mem_" . $key , serialize($val), $cookie_limit, "/" );
					} else {
						@setcookie( "mem_" . $key , $val, $cookie_limit, "/" );
					}

				}

			} else{
				$res["message"]["ng"]["error"] = _ERRHEAD . "ログインIDまたはパスワードが違います。<br />";
			}
		}

		// ログイン結果
		$res["result"] = ( empty($res["message"]["ng"]) ) ? true : false;

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: logout
	// 引  数: なし
	// 戻り値: なし
	// 内  容: 会員ログアウト
	//-------------------------------------------------------
	function logout() {

		// クッキークリア
		if( is_array( $_COOKIE ) ) {
			// ログアウト処理
			foreach( $_COOKIE as $key => $val ) {
				if( preg_match('/^mem\_/', $key ) ) {
					@setcookie( $key , ""  , time() - 3600, "/" );
				}
			}
		}

		// ログイン情報クリア
		unset( $_COOKIE );

	}


	//-------------------------------------------------------
	// 関数名: GetIdRow
	// 引  数: $id - メンバーID
	// 戻り値: メンバーデータ
	// 内  容: メンバーを1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id, $search = null ) {

		// データチェック
		if( !is_numeric($id) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array(
			"select" => "*",
			"from"   => $this->_CtrTable,
			"where"  => $this->_CtrTablePk . " = ? AND delete_flg = 0 ",
			"bind"   => array( $id )
		);

		if( !empty($search["user"]) ){
			$creation_kit["where"] .= " AND temp_var = ? ";
			$creation_kit["bind"][] = $search["user"];
		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH) );

		// 戻り値
		return $res;

	}


	//==================================================================================================
	//   メール設定
	//==================================================================================================

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