<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: 28 一覧
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objArticle = new FT_article( $objManage );

// ページ設定
$arr_post["page"] = ( empty($arr_get["page"] ) || !is_numeric($arr_get["page"]) ) ? 1 : $arr_get["page"];

// カテゴリー設定
$arr_post["cid"]  = ( empty($arr_get["cid"]) || !is_numeric($arr_get["cid"]) ) ? null : $arr_get["cid"];

// お知らせ取得
$t_article = $objArticle->GetSearchList( $arr_post );

// クラス削除
unset( $objArticle );
unset( $objManage  );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "28";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "article/";

// テンプレートに設定
$smarty->assign( "page_navi", $t_article["page"] );
$smarty->assign( "t_article", $t_article["data"] );
$smarty->assign( "link", $_FRONT["home"]. "/". $_DIR_NAME. "/". "article". "/detail.php" );

$smarty->assign( "OptionArticleCategory", $OptionArticleCategory );

// 表示
$smarty->display("index.tpl");
?>