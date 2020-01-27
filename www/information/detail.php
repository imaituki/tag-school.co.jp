<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/24
// 作成者: yamada
// 内  容: ニュース
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new FT_information( $objManage );

// お知らせ取得
$arr_post["id"] = ( empty($arr_get["id"] ) || !is_numeric($arr_get["id"]) ) ? null : $arr_get["id"];
$t_information = $objInformation->GetIdRow( $arr_post["id"] );

// クラス削除
unset( $objInformation );
unset( $objManage );

if( empty($t_information["id_information"]) ){
	header( "Location: ./" );
	exit;
}


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = $t_information["title"];

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/";

$smarty->assign( "data", $t_information );

$smarty->assign( "OptionCategory", $OptionCategory );

// 表示
$smarty->display("detail.tpl");
?>