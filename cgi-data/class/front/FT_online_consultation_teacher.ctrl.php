<?php
//----------------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ操作クラス
//----------------------------------------------------------------------------

//-------------------------------------------------------
//  クラス
//-------------------------------------------------------
class FT_online_consultation_teacher {

	//-------------------------------------------------------
	//  変数宣言
	//-------------------------------------------------------
	// DB接続
	var $_DBconn = null;

	// 主テーブル
	var $_CtrTable   = "t_online_consultation_teacher";
	var $_CtrTablePk = "id_online_consultation_teacher";

	// コントロール機能（ログ用）
	var $_CtrLogName = "講師";


	//-------------------------------------------------------
	// 関数名:__construct
	// 引  数:$dbconn  : DB接続オブジェクト
	// 戻り値:なし
	// 内  容:コンストラクタ
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
	// 関数名:__destruct
	// 引  数:なし
	// 戻り値:なし
	// 内  容:デストラクタ
	//-------------------------------------------------------
	function __destruct() {

	}

	//-------------------------------------------------------
	// 関数名:GetSearchList
	// 引  数:$search - 検索条件
	//       :$option - 取得条件
	// 戻り値:リスト
	// 内  容:検索を行いデータを取得
	//-------------------------------------------------------
	function GetSearchList( $option = null ) {

		// SQL配列
		$creation_kit = array(  "select" => "*",
								"from"   => $this->_CtrTable,
								"where"  => "delete_flg = 0 AND display_flg = 1",
								"order"  => "display_num ASC",
								"bind"   => array()
							);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH_ALL ) );

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名:GetIdRow
	// 引  数:$id - ID
	// 戻り値:データ1件分
	// 内  容:データ1件取得する
	//-------------------------------------------------------
	function GetIdRow( $id ) {

		// データチェック
		if( !is_numeric( $id ) ) {
			return null;
		}

		// SQL配列
		$creation_kit = array( "select" => "*",
								 "from"   => $this->_CtrTable,
								 "where"  => "delete_flg = 0 AND " . $this->_CtrTablePk . " = ?",
								 "bind"   => array($id)
		);

		// データ取得
		$res = $this->_DBconn->selectCtrl( $creation_kit, array( "fetch" => _DB_FETCH ) );

		// 戻り値
		return $res;

	}

	//-------------------------------------------------------
	// 関数名: GetOption
	// 引  数: なし
	// 戻り値: 講師オプション
	// 内  容: 講師をオプション化して取得
	//-------------------------------------------------------
	function GetOption() {

		// SQL配列
		$creation_kit = array(  "select" => "id_online_consultation_teacher, name",
								"from"   => "t_online_consultation_teacher",
								"where"  => "delete_flg = 0 AND display_flg = 1",
								"order"  => "display_num ASC"
							);
		// データ取得
		$arr_option = $this->_DBconn->selectCtrl( $creation_kit, array("fetch" => _DB_FETCH_ALL) );

		// オプション用に成形
		if( !empty($arr_option) ){
			foreach( $arr_option as $val ){
				$res[$val["id_online_consultation_teacher"]] = $val["name"];
			}
		}

		if( empty($res) ){
			$res = null;
		}

		// 戻り値
		return $res;

	}




}

?>
