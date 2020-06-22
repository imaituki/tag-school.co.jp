<?php
//-------------------------------------------------------------------
// 作成日：2017/05/28
// 作成者：岩崎
// 内  容：設定編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objSetting = new AD_online_consultation_setting( $objManage );

// データ変換
$arr_post = $objSetting->convert( $arr_post );

// データチェック
$message = $objSetting->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objSetting->_DBconn->StartTrans();

	// 登録処理
	$res = $objSetting->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objSetting->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objSetting->_DBconn->CompleteTrans();

}
// クラス削除
unset( $objManage    );
unset( $objSetting   );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./" );

} else {


	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );

	// 表示
	$smarty->display( "edit.tpl" );

}
?>
