<?php
//----------------------------------------------------------------------------
// 作成日: 2020/01/06
// 作成者: yamada
// 内  容: メール配信操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class AD_magazine {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "mst_magazine";
	var $_CtrTablePk = "id_magazine";

	// コントロール機能（ログ用）
	var $_CtrLogName = "メール配信";

	// XML操作クラス
	var $_FN_xml = null;


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn: DB接続オブジェクト
	// 戻り値: なし
	// 内  容: コンストラクタ
	//-------------------------------------------------------
	function __construct( $dbconn, $xmlPath = null ) {

		// クラス宣言
		if( !empty( $dbconn ) ) {
			$this->_DBconn  = $dbconn;
		} else {
			$this->_DBconn  = new DB_manage( _DNS );
		}
		$this->_FN_file = new FN_file();

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
		$objInputConvert->entryConvert( "mail", array("ENC_KANA"), "a" );

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

		// チェックエントリー
		$objInputCheck->entryData( "タイトル", "title", $arrVal["title"], array( "CHECK_EMPTY", "CHECK_MIN_MAX_LEN" ), 0, 255 );
		$objInputCheck->entryData( "送信・保存設定", "post_flg", $arrVal["post_flg"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );

		// チェックエントリー（UPDATE時）
		if( ( strcmp( $mode, "update" ) == 0 ) ) {
			$objInputCheck->entryData( "メール配信ID", "all", $arrVal["id_magazine"], array( "CHECK_EMPTY", "CHECK_NUM" ), null, null );
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
	// 内  容: メール配信データ登録
	//-------------------------------------------------------
	function insert( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );

		// No.
		$creation_kit = array(  "select" => "MAX( number )",
								"from"   => "mst_magazine",
								"where"  => "1",
							);
		$max_num = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ONE) );
		$arrVal["number"] = $max_num + 1;
		// 登録日など
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
	// 内  容: メール配信データ更新
	//-------------------------------------------------------
	function update( $arrVal, $arrSql = null ) {

		// 登録データの作成
		$arrVal = $this->_DBconn->arrayKeyMatchFecth( $arrVal, "/^[^\_]/" );
		$arrVal["update_date"] = date( "Y-m-d H:i:s" );

		// 更新条件
		$where = $this->_CtrTablePk . " = ?";

		$bind = array( $arrVal["id_magazine"] );

		// 更新
		$res = $this->_DBconn->update( $this->_CtrTable, $arrVal, $arrSql, $where, $bind );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: delete
	// 引  数: $id - 削除するメール配信ID
	// 戻り値: true - 正常, false - 異常
	// 内  容: メール配信データ削除
	//-------------------------------------------------------
	function delete( $id ) {

		// 初期化
		$res = false;

		// 更新
		$res = $this->_DBconn->delete( $this->_CtrTable, $this->_CtrTablePk . " = ?", array( $id ) );

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
		$res = $this->_DBconn->update( $this->_CtrTable, array( "display_flg" => $flg ), null, $this->_CtrTablePk . " = ?", array( $id ) );

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetSearchList
	// 引  数: $search - 検索条件
	//       : $option - 取得条件
	// 戻り値: メール配信リスト
	// 内  容: メール配信検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null ) {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "1 ",
								"order"  => "entry_date DESC",
								"bind"   => array()
							);

		// 検索条件
		if( !empty( $search["send_flg"] ) ) {
			$creation_kit["where"] .= " AND post_flg = ?";
			$creation_kit["bind"][] = 1;
		}
/*
		if( !empty( $search["search_date_start"] ) ) {
			$creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_start"] . "'", $this->_CtrTable . ".date", " >= ", null, null, null, $creation_kit["bind"] ) . " ";
		}
		if( !empty( $search["search_date_end"] ) ) {
			$creation_kit["where"] .= "AND " . $this->_DBconn->createWhereSql( "'" . $search["search_date_end"] . "'", $this->_CtrTable . ".date", " <= ", null, null, null, $creation_kit["bind"] ) . " ";
		}
*/
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
	// 引  数: $id - メール配信ID
	// 戻り値: メール配信
	// 内  容: メール配信を1件取得する
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


	//-------------------------------------------------------
	// 関数名: GetMember
	// 引  数: $なし
	// 戻り値: メンバー一覧
	// 内  容: メール送信対象のメンバーを取得
	//-------------------------------------------------------
	function GetMember() {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => "mst_member",
								"where"  => "mail_magazine_flg = 1 AND delete_flg = 0",
								"order"  => "id_member ASC",
								"bind"   => array()
							);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ALL) );

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