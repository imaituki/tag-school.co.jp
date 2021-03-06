<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: Mypage 新規会員登録 完了
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
if( !empty($_SESSION["front"][$_DIR_NAME]["regist"]["POST"]["temp_var"]) ){
	$arr_post = $_SESSION["front"][$_DIR_NAME]["regist"]["POST"];
	unset( $_SESSION["front"][$_DIR_NAME]["regist"]["POST"] );

	$_HTML_HEADER["title"] = "新規会員登録 完了";
}else{
	$_HTML_HEADER["title"] = "会員本登録 完了";
}

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/regist/";

$smarty->assign( "arr_post", $arr_post );

// 表示
$smarty->display("finish.tpl");
?>