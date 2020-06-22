<?php
//-------------------------------------------------------------------
// 作成日: 2020/06/18
// 作成者: yamada
// 内  容: ログイン
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
if( !empty($arr_post) ){

	$objManage = new DB_manage( _DNS );
	$objStaff  = new AD_staff( $objManage );

	// データ取得
	$res = $objStaff->login( $arr_post["account"], $arr_post["password"] );

	// クラス削除
	unset( $objManage );
	unset( $objStaff );
	
}


//----------------------------------------
//  表示
//----------------------------------------
if( $res["result"] == 1 ) {
	
	// 管理画面TOPへ移動
	header( "Location: ./" );
	exit;
	
} else {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "";
	
	// テンプレートに設定
	$smarty->assign( "message", $res["message"] );
	
	// 表示
	$smarty->display("login.tpl");
	
}
?>