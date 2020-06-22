<?php
//----------------------------------------------------------------------------
// 作成日: 2020/06/18
// 作成者: yamada
// 内  容: 社員操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_staff {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_staff";
	var $_CtrTablePk = "id_staff";

	// コントロール機能（ログ用）
	var $_CtrLogName = "スタッフ";

	// 画像設定
	var $_ARR_IMAGE = null;


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn  :  DB接続オブジェクト
	// 戻り値: なし
	// 内  容: コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn, $arrImg = NULL ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
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
		$objInputConvert->entryConvert( "account" , array( "ENC_KANA" ), "a" );
		$objInputConvert->entryConvert( "password", array( "ENC_KANA" ), "a" );

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
		$objInputCheck->entryData( "スタッフ名", "name"    , $arrVal["name"]    , array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "アカウント", "account" , $arrVal["account"] , array( "CHECK_EMPTY", "CHECK_ALNUM", "CHECK_MIN_MAX_LEN" ), 4, 12 );
		$objInputCheck->entryData( "パスワード", "password", $arrVal["password"], array( "CHECK_EMPTY", "CHECK_ALNUM", "CHECK_MIN_MAX_LEN" ), 4, 12 );
		
		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "スタッフID", "all", $arrVal["id_staff"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
		}
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();

		//----------------------------------------
		//  アカウント 重複チェック
		//----------------------------------------
		if( empty( $res["ng"]["account"] ) ) {
			
			// SQL配列
			$creation_kit  = array( "select" => "account",
									"from"   => $this->_CtrTable,
									"where"  => "account = '" . $arrVal["account"] . "' ",
									"bind"   => array() );
			
			// 追加条件
			if ( strcmp( $mode, "update" ) == 0 ) {
				$creation_kit["where"] .= "AND NOT( " . $this->_CtrTablePk . " = ? ) ";
			}

			$creation_kit["bind"][] = $arrVal["id_member"];
			
			// 重複チェック
			$code = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ONE ) );
			if( $code === $arrVal["registed_account"] ){
				// パスワードを変更しない場合は素通りさせる
			}elseif( !empty( $code ) ) {
				$res["ng"]["account"] = $objInputCheck->_errHead . "アカウントが重複しています。<br />";
			}
			
		}
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名: insert
	// 引  数: $arrVal - 登録データ（ 'カラム名' => '値' ）
	//       : $arrSql - 登録データ（ 'カラム名' => 'SQL' ）
	// 戻り値: なし
	// 内  容: データ登録
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
	// 内  容: データ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {
		
		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["password"]    = fn_encrypt( $arrVal["password"], _CRYPTKEY );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 不要なデータを削除
		unset( $arrVal["registed_account"] );
		
		// 更新条件
		$where = $this->_CtrTablePk . " = ?";

		$bind = array( $arrVal["id_staff"] );
		
		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名: delete
	// 引  数: $id  - 社員ID
	// 戻り値: true - 正常, false - 異常
	// 内  容: データ削除
	//-------------------------------------------------------
	function delete( $id ) {
		
		// 初期化
		$res = false;
		
		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, array( "delete_flg" => 1, "update_date" => date("Y-m-d H:i:s") ), null, $this->_CtrTablePk . " = ?", array($id) );

		// 戻り値
		return $res;
		
	}


	//-------------------------------------------------------
	// 関数名: login
	// 引  数: $account - アカウント
	//       : $pass     - パスワード
	// 戻り値: 結果
	// 内  容: 社員ログイン
	//-------------------------------------------------------
	function login( $account, $password ) {
		
		// チェッククラス宣言
		$objInputCheck = new FN_input_check( "UTF-8" );
		
		// チェックエントリー
		$objInputCheck->entryData( "アカウント", "account", $account, array( "CHECK_EMPTY" ), null, null );
		$objInputCheck->entryData( "パスワード", "password", $password, array( "CHECK_EMPTY" ), null, null );
		
		// チェック実行
		$res["ng"] = $objInputCheck->execCheckAll();
		
		// データチェック
		if( empty( $res["message"]["ng"] ) ) {
			
			// SQL配列
			$creation_kit = array(  "select" => $this->_CtrTable . ".*",
									"from"   => $this->_CtrTable,
									"where"  => $this->_CtrTable . ".delete_flg = 0 AND " .
												$this->_CtrTable . ".account = '" . $account . "' AND " .
												$this->_CtrTable . ".password = '" . fn_encrypt( $password, _CRYPTKEY ) . "' "
								);
			
			// 社員データ取得
			$mst_staff = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );
			
			// ログインチェック
			if( $mst_staff["id_staff"] != "" ) {
				
				// SESSION ID
				$mst_staff["ssid"] = session_id();
				
				// クッキー保管期間（1日間）
				$cookie_limit = time() + 60 * 60 * 24;
				
				// クッキー設定
				foreach( $mst_staff as $key => $val ) {
					
					// 一度クリア
					@setcookie( "ad_" . $key , ""  , time() - 3600, "/" );
					
					// 設定
					if( is_array( $val ) ) {
						@setcookie( "ad_" . $key , serialize( $val ), $cookie_limit, "/" );
					} else {
						@setcookie( "ad_" . $key , $val, $cookie_limit, "/" );
					}
					
				}

				
			} else {
				$res["message"]["ng"] = _ERRHEAD . "アカウントまたはパスワードが違います。<br />";
			}
			
		}
		
		// ログイン結果
		$res["result"] = ( empty( $res["message"]["ng"] ) ) ? true : false;
		
		// 戻り値
		return $res;
		
	}
	
	
	//-------------------------------------------------------
	// 関数名: logout
	// 引  数: なし
	// 戻り値: なし
	// 内  容: 社員ログアウト
	//-------------------------------------------------------
	function logout() {
		
		// クッキークリア
		if( is_array( $_COOKIE ) ) {
			
			// ログアウト処理
			foreach( $_COOKIE as $key => $val ) {
				if( preg_match( "/^ad_.*/", $key ) ) {
					@setcookie( $key , ""  , time() - 3600, "/" );
				}
			}
		}
		
		// ログイン情報クリア
		unset( $_COOKIE );
		
	}
	
	
	//-------------------------------------------------------
	// 関数名: GetSearchList
	// 引  数: $search - 検索条件
	//       : $staff - 取得条件
	// 戻り値: リスト
	// 内  容: 検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {
		
		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 ",
								"order"  => "id_staff ASC",
								"bind"   => array()
							);

		// 検索条件
		if( !empty( $search["search_keyword"] ) ) {
			$creation_kit["where"] .= "AND ( " . $this->_DBconn->createWhereSql( $search["search_keyword"], "name", "LIKE", "OR", "%string%", array( "　", " " ), $creation_kit["bind"] ) . " ) ";
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
	// 関数名: GetIdRow
	// 引  数: $id - 社員ID
	// 戻り値: データ1件分
	// 内  容: 1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "*",
							   "from"   => $this->_CtrTable,
							   "where"  => $this->_CtrTablePk . " = ? AND 
										   delete_flg = 0 ",
							   "bind"   => array($id) );

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// 戻り値
		return $res;

	}

}

?>