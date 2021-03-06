<?php
//-------------------------------------------------------------------
// 作成日:  2020/06/18
// 作成者:  yamada
// 内  容:  社員 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
$_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage );

// データ取得
$mst_staff = $mainObject->GetSearchList( $arr_post );

// クラス削除
unset( $objManage  );
unset( $mainObject );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートに設定
$smarty->assign( "page_navi" , $mst_staff["page"] );
$smarty->assign( "mst_staff" , $mst_staff["data"] );

// 表示
$smarty->display("list.tpl");
?>