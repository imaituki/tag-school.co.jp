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
$magazine = $mainObject->GetIdRow( $arr_get["id"] ); // メールマガジン

$mst_member = $mainObject->GetMember(); // メルマガ送信対象

// クラス削除
unset( $objManage  );
unset( $mainObject );

// 送信数
$num = count( $mst_member );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty($magazine[_CONTENTS_ID]) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	$smarty->assign( "message"    , $message    );
	$smarty->assign( "magazine"   , $magazine   );
	$smarty->assign( "mst_member" , $mst_member );
	$smarty->assign( "num"        , $num        );
	
	// 表示
	$smarty->display( "send.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = $message;

	// 表示
	header( "Location: ./index.php" );
	exit;
}
?>