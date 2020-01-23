<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: お問い合わせ
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "お問い合わせ";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/";

$smarty->assign( "arr_post", $arr_post );

$smarty->assign( "OptionGrade"  , $OptionGrade   );
$smarty->assign( "OptionContent", $OptionContent );
$smarty->assign( "OptionRequest", $OptionRequest );

// 表示
$smarty->display("_index.tpl");
?>
