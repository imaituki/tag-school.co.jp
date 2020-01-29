<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objMember = new AD_member( $objManage );

// データ取得
$_POST = $objMember->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage      );
unset( $objMember );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_member"] ) ) {

	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "member/";

	// テンプレートに設定
	$smarty->assign( "pref_codes", $pref_codes);
	$smarty->assign( "active_content", _ACTIVE_CONTENT );

	$smarty->assign( "OptionRegistFlg", $OptionRegistFlg );
	$smarty->assign( "OptionDeleteFlg", $OptionDeleteFlg );
	$smarty->assign( "OptionReferer"  , $OptionReferer   );

	// 表示
	$smarty->display( "edit.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";

	// 表示
	header( "Location: ./index.php" );

}

?>