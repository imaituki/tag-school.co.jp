<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: お問い合わせ 確認
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  入力情報のチェック
//----------------------------------------
$objManage  = new DB_manage( _DNS );
$objContact = new FT_contact($objManage);

// データ変換
$arr_post = $objContact->convert( $arr_post );

// データチェック
$message = $objContact->check( $arr_post, 'insert' );

// クラス削除
unset( $objManage );
unset( $objContact );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "お問い合わせ　確認";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/";

// テンプレートに設定
$smarty->assign( "arr_post", $arr_post );
$smarty->assign( "message" , $message  );

$smarty->assign( "OptionGrade", $OptionGrade );

// エラーチェック
if( empty($message["ng"]) ) {
	// 表示
	$smarty->display("check.tpl");
}else{
	// 表示
	$smarty->display("index.tpl");
}
?>