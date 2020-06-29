<?php
//-------------------------------------------------------------------
// 作成日：2017/05/25
// 作成者：岩崎
// 内  容：新規登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

if( !empty( $_GET["y"] ) && !empty( $_GET["m"] ) && !empty( $_GET["d"] ) ){
	$_POST["date"] =  date( "Y-m-d", mktime( 0, 0, 0, $_GET["m"], $_GET["d"], $_GET["y"] ) );
}

// $_POST["name"] = "予約埋め【管理用】";
// $_POST["ruby"] = "ヨヤク";
// $_POST["tel"] = "086-238-9802";
// $_POST["mail"] = "office@web3.co.jp";
// $_POST["comment"] = "予約埋め";

if( empty( $message ) ){
	$message = NULL;
}

//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートに設定
$smarty->assign( "message"   , $message    );

// オプション配列
$smarty->assign( "OptionReserveTime" , $OptionReserveTime );
$smarty->assign( "OptionWeek"       , $OptionWeek        );
$smarty->assign( "OptionGrade"      , $OptionGrade       );
$smarty->assign( "OptionSex"        , $OptionSex         );
$smarty->assign( "OptionTeacher"        , $OptionTeacher        );

// 表示
$smarty->display( "new.tpl" );

?>
