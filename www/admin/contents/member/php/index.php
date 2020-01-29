<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 一覧表示
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
$objManage = new DB_manage( _DNS );
$objMember = new AD_member( $objManage );

// データ取得
$t_member = $objMember->GetSearchList( $arr_post );


// クラス削除
unset( $objManage );
unset( $objMember );

//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "member/";

// テンプレートに設定
$smarty->assign( "message"  , $message          );
$smarty->assign( "page_navi", $t_member["page"] );
$smarty->assign( "t_member" , $t_member["data"] );

$smarty->assign( "OptionRegistFlg", $OptionRegistFlg );
$smarty->assign( "OptionDeleteFlg", $OptionDeleteFlg );
$smarty->assign( "OptionReferer"  , $OptionReferer   );

// 表示
$smarty->display("index.tpl");
?>