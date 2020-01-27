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

// ページ設定
$arr_post["page"] = ( empty($arr_get["page"] ) || !is_numeric($arr_get["page"]) ) ? 1 : $arr_get["page"];

// お知らせ取得
$t_information = $objInformation->GetSearchList( $arr_post );

// クラス削除
unset( $objInformation );
unset( $objManage );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "新着情報";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/";

$smarty->assign( "page_navi"    , $t_information["page"] );
$smarty->assign( "t_information", $t_information["data"] );

$smarty->assign( "OptionCategory", $OptionCategory );

// 表示
$smarty->display("index.tpl");
?>