<?php
//-------------------------------------------------------------------
// 作成日: 2020/02/07
// 作成者: yamada
// 内  容: お問い合わせ 新規登録
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
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// オプション設定
$smarty->assign( "OptionContent", $OptionContent );
$smarty->assign( "OptionGrade"  , $OptionGrade   );
$smarty->assign( "OptionRequest", $OptionRequest );
$smarty->assign( "OptionContactReferer", $OptionContactReferer );
$smarty->assign( "OptionStatus" , $OptionStatus  );
$smarty->assign( "OptionKikkake", $OptionKikkake );
$smarty->assign( "OptionSchoolType", $OptionSchoolType );

// 表示
$smarty->display( "new.tpl" );
?>