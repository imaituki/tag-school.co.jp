<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: 28 詳細
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

// お知らせ取得
$arr_post["id"] = ( empty($arr_get["id"] ) || !is_numeric($arr_get["id"]) ) ? null : $arr_get["id"];
$t_article = $objArticle->GetIdRow( $arr_post["id"] );

// クラス削除
unset( $objArticle );
unset( $objManage  );

if( empty($t_article["id_article"]) ){
	header( "Location: ./" );
	exit;
}


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = $t_article["title"];

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
$smarty->assign( "data", $t_article );

$smarty->assign( "OptionArticleCategory", $OptionArticleCategory );

// 表示
$smarty->display("detail.tpl");
?>