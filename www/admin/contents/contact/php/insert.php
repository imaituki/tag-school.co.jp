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
//  初期化
//----------------------------------------
$message = NULL;


//----------------------------------------
//  新規登録処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage );

// データ変換
$arr_post = $mainObject->convert( $arr_post );

// データチェック
$message = $mainObject->check( $arr_post, 'insert' );

if( is_array($arr_post["kikkake"]) ){
	$arr_post["kikkake"] = implode( ",", $arr_post["kikkake"] );
}

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$mainObject->_DBconn->StartTrans();

	// 登録処理
	$res = $mainObject->insert( $arr_post );

	// 失敗したらロールバック
	if( $res == false ) {
		$mainObject->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$mainObject->_DBconn->CompleteTrans();

}

// クラス削除
unset( $objManage  );
unset( $mainObject );


//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "登録が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );

} else {


	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );

	$smarty->assign( "OptionContent", $OptionContent );
	$smarty->assign( "OptionGrade"  , $OptionGrade   );
	$smarty->assign( "OptionRequest", $OptionRequest );
	$smarty->assign( "OptionContactReferer", $OptionContactReferer );
	$smarty->assign( "OptionStatus" , $OptionStatus  );
	$smarty->assign( "OptionKikkake", $OptionKikkake );

	// 表示
	$smarty->display( "new.tpl" );

}
?>