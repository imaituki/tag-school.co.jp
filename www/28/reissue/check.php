<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/10
// 作成者: yamada
// 内  容: Mypage パスワード再発行 確認
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
$member = $objMember->GetMember( $arr_post );

// クラス削除
unset( $objManage );
unset( $objMember );

if( empty($member) ){
	$message["ng"]["mail"] = "入力されたメールアドレスの会員が見つかりません。<br />";
}


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
if( empty($message["ng"]) ) {
	$_HTML_HEADER["title"] = "パスワード再発行　確認";
}else{
	$_HTML_HEADER["title"] = "パスワード再発行";
}

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "mypage/reissue/";

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