<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: カテゴリ 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
if( !empty( $arr_post["search_date_start"] ) ) {
	$arr_post["search_date_start"] = date( "Y/m/d", strtotime( $arr_post["search_date_start"] ) );
} else {
	$arr_post["search_date_start"] = null;
}
if( !empty( $arr_post["search_date_end"] ) ) {
	$arr_post["search_date_end"] = date( "Y/m/d", strtotime( $arr_post["search_date_end"] ) );
} else {
	$arr_post["search_date_end"] = null;
}
$_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// データ取得
$t_category = $objCategory->GetSearchList( $arr_post );

// クラス削除
unset( $objManage   );
unset( $objCategory );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "category/";

// テンプレートに設定
$smarty->assign( "page_navi" , $t_category["page"] );
$smarty->assign( "t_category", $t_category["data"] );

// 表示
$smarty->display("list.tpl");
?>