<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ 一覧表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );


//----------------------------------------
//  SESSION取得
//----------------------------------------
$arr_post = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] : null;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage          = new DB_manage( _DNS );
$objArticleCategory = new AD_article_category( $objManage );

// データ取得
$t_article_category = $objArticleCategory->GetSearchList( $arr_post );

// クラス削除
unset( $objManage          );
unset( $objArticleCategory );


//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "article_category/";

// テンプレートに設定
$smarty->assign( "message"           , $message                 );
$smarty->assign( "page_navi"         , $t_article_category["page"] );
$smarty->assign( "t_article_category", $t_article_category["data"] );

// 表示
$smarty->display("index.tpl");
?>