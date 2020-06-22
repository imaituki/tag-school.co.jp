<?php
//-------------------------------------------------------------------
// 作成日：2019/05/15
// 作成者：牧
// 内  容：ニュース
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";

//セッションスタート
@session_start();

if(!empty($_SESSION["front"]["online-consultation"]["POST"])){
	$post = $_SESSION["front"]["online-consultation"]["POST"];
}else{
	$post = null;
}

// 削除
unset( $_SESSION["front"]["online-consultation"] );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレートに設定
$smarty->assign( "arr_post" , $post );

// 表示
$smarty->display("finish.tpl");
?>
