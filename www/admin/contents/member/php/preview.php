<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 プレビュー
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";
require $_SERVER["DOCUMENT_ROOT"] . "/../cgi-data/config/front.ini";

//----------------------------------------
//  データ整理
//----------------------------------------
// 日付
$arr_post["date"] = date( "Y-m-d H:i:s", mktime(  0,  0,  0, $arr_post["date"]["Month"], $arr_post["date"]["Day"], $arr_post["date"]["Year"] ) );

// タグ許可
$arr_post["comment"] = html_entity_decode( $arr_post["comment"] );

// 設定
$t_member = $arr_post;


//----------------------------------------
//  表示
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "member/";

// テンプレート設定
$smarty->assign( "t_member", $t_member );
$smarty->assign( "active_content", _ACTIVE_CONTENT );
// 表示
$html = $smarty->fetch( _PREVIEW_TPL, "", _CONTENTS_DIR . "_preview" );

echo $html;
?>