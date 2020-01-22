<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 検索
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
$objManage = new DB_manage( _DNS );
$objMember = new AD_member( $objManage );

// データ取得
$t_member = $objMember->GetSearchList( $arr_post );

// クラス削除
unset( $objManage );
unset( $objMember   );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "member/";

// テンプレートに設定
$smarty->assign( "page_navi"     , $t_member["page"] );
$smarty->assign( "t_member"      , $t_member["data"] );
$smarty->assign( "active_content", _ACTIVE_CONTENT   );

$smarty->assign( "OptionRegistFlg", $OptionRegistFlg );
$smarty->assign( "OptionDeleteFlg", $OptionDeleteFlg );

// 表示
$smarty->display("list.tpl");
?>