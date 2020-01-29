<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 新規登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= "member/";

$smarty->assign( "OptionRegistFlg", $OptionRegistFlg );
$smarty->assign( "OptionDeleteFlg", $OptionDeleteFlg );
$smarty->assign( "OptionReferer"  , $OptionReferer   );

// 表示
$smarty->display( "new.tpl" );
?>