<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage );

// データ取得
$_POST = $mainObject->GetIdRow( $arr_get["id"] );


	// 登録処理
	$res = $mainObject->insert( $_POST );

	// 新着情報に自動登録
	if( $_POST["autoinfo_flg"] == 1 ){
		$autoinfo = array(
			"date"             => $_POST["date"],
			"title"             => $_POST["title"],
			"autoinfo_comment" => $_POST["autoinfo_comment"],
		);
		$mainObject->insert_information( $autoinfo );
	}

	// 失敗したらロールバック
	if( $res == false ) {
		$mainObject->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$mainObject->_DBconn->CompleteTrans();



// クラス削除
unset( $objManage );
unset( $mainObject );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR;

// テンプレートに設定
$smarty->assign( "page_navi", $_POST["page"] );
$smarty->assign( "arr__POST" , $_POST["data"] );

$smarty->assign( "OptionArticleCategory", $OptionArticleCategory );

if( !empty($_ARR_IMAGE) ){
	$smarty->assign( '_ARR_IMAGE', $_ARR_IMAGE );
}
if( !empty($_ARR_FILE) ){
	$smarty->assign( '_ARR_FILE', $_ARR_FILE );
}

// 表示
	header( "Location: ./index.php" );
?>