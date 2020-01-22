<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/06
// 作成者: yamada
// 内  容: メール配信 送信確認
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
$mainObject = new $class_name( $objManage );

// データ取得
$magazine = $mainObject->GetSearchList( array("send_flg" => 1), array("fetch" => _DB_FETCH_ALL) );

// クラス削除
unset( $objManage  );
unset( $mainObject );


//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset($_SESSION["admin"][_CONTENTS_DIR]["message"]) ) ? $_SESSION["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );

// エラーメッセージ
if( count($magazine) == 0 ){
	$message["ng"] = "次回配信予定のメルマガがありません。";
} elseif( count($magazine) > 1 ){
	$message["ng"] = "次回配信予定のメルマガが複数あります。";
}


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

$smarty->assign( "message", $message     );
$smarty->assign( "data"   , $magazine[0] );

// 表示
$smarty->display( "test.tpl" );
?>