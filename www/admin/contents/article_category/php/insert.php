<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ 新規登録
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
$objManage          = new DB_manage( _DNS );
$objArticleCategory = new AD_article_category( $objManage );

// データ変換
$arr_post = $objArticleCategory->convert( $arr_post );

// データチェック
$message = $objArticleCategory->check( $arr_post, 'insert' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objArticleCategory->_DBconn->StartTrans();

	// 登録処理
	$res = $objArticleCategory->insert( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objArticleCategory->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objArticleCategory->_DBconn->CompleteTrans();

}

// クラス削除
unset( $objManage          );
unset( $objArticleCategory );


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
	$smarty->compile_dir .= "article_category/";

	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );

	// 表示
	$smarty->display( "new.tpl" );

}
?>