<?php
//----------------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: 28クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_article {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_article";
	var $_CtrTablePk = "id_article";

	// コントロール機能（ログ用）
	var $_CtrLogName = "28";


	//-------------------------------------------------------
	// 関数名: __construct
	// 引  数: $dbconn  :  DB接続オブジェクト
	// 戻り値: なし
	// 内  容: コンストラクタ
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
	// 関数名: __destruct
	// 引  数: なし
	// 戻り値: なし
	// 内  容: デストラクタ
	//-------------------------------------------------------
	function __destruct() {

	}


	//-------------------------------------------------------
	// 関数名: GetSearchList
	// 引  数: $search - 検索条件
	//       : $option - 取得条件
	// 戻り値: リスト
	// 内  容: 検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $search, $option = null, $limit = null ) {

		// SQL配列
		$creation_kit = array(
			"select" => "*",
			"from"   => $this->_CtrTable,
			"where"  => "date <= NOW() AND
						 display_flg = 1 AND
						 ( display_indefinite = 1 OR (display_indefinite = 0 AND display_start <= NOW() AND NOW() <= display_end) ) ",
						"order"  => "date DESC",
			"bind"   => array()
		);

		if( !empty($search["cid"]) ){
			$creation_kit["where"] .= " AND id_category = ? ";
			$creation_kit["bind"][] = $search["cid"];
		}

		// 取得条件
		if( empty($option) ) {
			if( !is_numeric($search["page"]) ){
				$search["page"] = 1;
			}

			// ページ切り替え配列
			$_PAGE_INFO = array( "PageNumber"      => $search["page"],
								 "PageShowLimit"   => _PAGESHOWLIMIT,
								 "PageNaviLimit"   => _PAGENAVILIMIT,
								 "LinkSeparator"   => " ",
								 "LinkBackText"    => "&lt; 前へ",
								 "LinkNextText"    => "次へ &gt;",
								 "LinkBackClass"   => "next",
								 "LinkNextClass"   => "back",
								 "LinkSpanPref"    => "<li>",
								 "LinkSpanPost"    => "</li>",
								 "LinkSpanNowPref" => "<strong>",
								 "LinkSpanNowPost" => "</strong>" );

			// オプション
			$option = array( "fetch" => _DB_FETCH_ALL,
							 "page"  => $_PAGE_INFO );

		} else {

			// 取得件数制限
			if( !empty( $limit ) ) {
				$creation_kit["limit"] = $limit;
			}

		}

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, $option );

		// タグ許可
		if( !empty($res["data"]) && is_array($res["data"]) ) {
			foreach( $res["data"] as $key => $val ) {
				if( !empty( $res["data"][$key]["comment"] ) ) {
					$res["data"][$key]["comment"] = html_entity_decode( $res["data"][$key]["comment"] );
				}
			}
		} elseif( !empty($res) && is_array($res) ) {
			foreach( $res as $key => $val ) {
				if( !empty( $res[$key]["comment"] ) ) {
					$res[$key]["comment"] = html_entity_decode( $res[$key]["comment"] );
				}
			}
		}

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetIdRow
	// 引  数: $id   - ID
	// 戻り値: 1件分
	// 内  容: 1件取得する
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
			"where"  => "date <= NOW() AND
						 display_flg = 1 AND
						( display_indefinite = 1 OR (display_indefinite = 0 AND display_start <= NOW() AND NOW() <= display_end) ) AND " .
						$this->_CtrTablePk . " = ?",
			"bind"   => array( $id )
		);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// タグ許可
		if( !empty($res["comment"]) ){
			$res["comment"] = html_entity_decode( $res["comment"] );
		}

		// 戻り値
		return $res;

	}
	

	//-------------------------------------------------------
	// 関数名: GetDetailPageNavi
	// 引  数: $id   - 28ID
	// 戻り値: ページナビ
	// 内  容: 詳細ページ用のページナビを作成する
	//-------------------------------------------------------
	function GetDetailPageNavi( $id ) {

		// データチェック
		if( !is_numeric($id) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array(
			"select" => $this->_CtrTablePk,
			"from"   => $this->_CtrTable,
			"where"  => "display_flg = 1 AND
						 date <= NOW() AND
						( display_indefinite = 1 OR (NOW() BETWEEN display_start AND display_end) ) ",
			"order"  => "date DESC"
		);

		// データ取得
		$aryId = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_COL) );

		// データチェック
		if( is_array($aryId) ) {

			// 現在のKey
			$pageKey = array_search( $id, $aryId );

			// ページング
			$res["back"] = $aryId[$pageKey+1];
			$res["now"]  = $aryId[$pageKey];
			$res["next"] = $aryId[$pageKey-1];

		}

		// 戻り値
		return $res;

	}


	//-------------------------------------------------------
	// 関数名: GetOption
	// 引  数: なし
	// 戻り値: 28カテゴリーオプション
	// 内  容: 28カテゴリーをオプション化して取得
	//-------------------------------------------------------
	function GetOption() {

		// SQL配列
		$creation_kit = array(
			"select" => "id_article_category, name",
			"from"   => "mst_article_category",
			"where"  => "delete_flg = 0 AND display_flg = 1",
			"order"  => "display_num ASC"
		);
		// データ取得
		$arr_option = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ALL) );

		// オプション用に成形
		if( !empty($arr_option) ){
			foreach( $arr_option as $val ){
				$res[$val["id_article_category"]] = $val["name"];
			}
		}

		// 戻り値
		return $res;

	}
	
}
?>