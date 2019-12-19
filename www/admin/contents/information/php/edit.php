<?php
//-------------------------------------------------------------------
// 作成日: 2016/11/01
// 作成者: 鈴木
// 内  容: お知らせ 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage );

// データ取得
$_POST = $mainObject->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage  );
unset( $mainObject );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty($_POST[_CONTENTS_ID]) ) {
	
	// データ加工
	if( !empty($_POST["display_start"]) ){
		$_POST["display_start"] = date( "Y/m/d", strtotime($_POST["display_start"]) );
	}
	if( !empty($_POST["display_end"]) ){
		$_POST["display_end"] = date( "Y/m/d", strtotime($_POST["display_end"]) );
	}
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレートに設定
	if( !empty($_ARR_IMAGE) ){
		$smarty->assign( '_ARR_IMAGE', $_ARR_IMAGE );
	}
	if( !empty($_ARR_FILE) ){
		$smarty->assign( '_ARR_FILE', $_ARR_FILE );
	}
	
	// 表示
	$smarty->display( "edit.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";

	// 表示
	header( "Location: ./index.php" );

}
?>