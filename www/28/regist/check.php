<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: Mypage 新規会員登録 確認
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  入力情報のチェック
//----------------------------------------
$objManage = new DB_manage( _DNS );
$objMember = new FT_member($objManage);

// データ変換
$arr_post = $objMember->convert( $arr_post );

// データチェック
if( empty($arr_post["user"]) ){
	// 新規登録(メールアドレス)
	$title   = "新規会員登録";
	$message = $objMember->check_mail( $arr_post, 'insert' );
}else{
	// 本登録(パスワード)
	$title   = "会員本登録";
	$message = $objMember->check_mail( $arr_post, 'confirm' );
}

// クラス削除
unset( $objManage );
unset( $objMember );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
if( empty($message["ng"]) ) {
	$_HTML_HEADER["title"] = $title. "　確認";
}else{
	$_HTML_HEADER["title"] = $title;
}

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "mypage/regist/";

// テンプレートに設定
$smarty->assign( "arr_post" , $arr_post  );
$smarty->assign( "message"  , $message   );

// エラーチェック
if( empty( $message["ng"] ) ) {
	// 表示
	$smarty->display("check.tpl");
} else {
	// 表示
	$smarty->display("index.tpl");
}
?>