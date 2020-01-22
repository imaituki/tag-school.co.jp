<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/06
// 作成者: yamada
// 内  容: メール配信 プレビュー
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";
require _CGI_PATH. "/config/front.ini";

// ID
if( !is_numeric($arr_get["id"]) ) {
	$message["ng"] .= "IDが不正です。<br />";
}


//----------------------------------------
//  編集データ取得
//----------------------------------------
if( empty($message["ng"]) ) {
	// 操作クラス
	$objManage  = new DB_manage( _DNS );
	$mainObject = new $class_name( $objManage );

	// データ取得
	$magazine = $mainObject->GetIdRow( $arr_get["id"] );

	// クラス削除
	unset( $objManage  );
	unset( $mainObject );

	// 改行処理
	$magazine["header"] = str_replace( "\r\n", "<br />", $magazine["header"] );
	$magazine["main"]   = str_replace( "\r\n", "<br />", $magazine["main"]   );
	$magazine["footer"] = str_replace( "\r\n", "<br />", $magazine["footer"] );
}


//----------------------------------------
//  表示
//----------------------------------------
if( empty($message["ng"]) ) {
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレート設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "magazine", $magazine );

	// 表示
	$smarty->display( "preview.tpl" );

}
?>