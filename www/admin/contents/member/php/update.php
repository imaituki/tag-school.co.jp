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
//  更新処理
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objMember = new AD_member( $objManage );

// データ変換
$arr_post = $objMember->convert( $arr_post );

// データチェック
$message = $objMember->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objMember->_DBconn->StartTrans();

	// 登録処理
	$res = $objMember->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objMember->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objMember->_DBconn->CompleteTrans();

}

// クラス削除
unset( $objManage );
unset( $objMember );

//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );

} else {

	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "member/";

	// テンプレートに設定
	$smarty->assign( "message"   , $message    );
	$smarty->assign( "arr_post"  , $arr_post   );
	$smarty->assign( "pref_codes", $pref_codes);
	$smarty->assign( "active_content", _ACTIVE_CONTENT );

	$smarty->assign( "OptionRegistFlg", $OptionRegistFlg );
	$smarty->assign( "OptionDeleteFlg", $OptionDeleteFlg );
	$smarty->assign( "OptionReferer"  , $OptionReferer   );

	// 表示
	$smarty->display( "edit.tpl" );
}
?>