<?php
//-------------------------------------------------------------------
// 作成日：2018/03/28
// 作成者：牧
// 内  容：設定編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objSetting = new AD_online_consultation_setting( $objManage );

// データ取得
$_POST = $objSetting->GetIdRow(1);

// クラス削除
unset( $objManage  );
unset( $objSetting );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	//----------------------------------------
	//  メッセージ
	//----------------------------------------
	// メッセージ取得
	if( !empty ( $_SESSION["admin"][_CONTENTS_DIR]["message"] ) ) {
		$message  = $_SESSION["admin"][_CONTENTS_DIR]["message"];
	}else{
		$message = NULL;
	}

	// クリア
	unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );

	//----------------------------------------
	//  表示処理
	//----------------------------------------
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレートに設定
	$smarty->assign( "message"   , $message    );

	// 表示
	$smarty->display( "edit.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"]["setting"]["message"] = $message;

	// 表示
	header( "Location: /admin/" );

}
?>
