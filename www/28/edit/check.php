<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/09
// 作成者: yamada
// 内  容: Mypage 会員情報編集 確認
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
$arr_post["id_member"] = $_COOKIE["mem_id_member"];

// データチェック
$message = $objMember->check( $arr_post, 'update' );

// クラス削除
unset( $objManage );
unset( $objMember );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
if( empty($message["ng"]) ) {
	$_HTML_HEADER["title"] = "会員情報編集　確認";
}else{
	$_HTML_HEADER["title"] = "会員情報編集";
}

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/edit/";

// テンプレートに設定
$smarty->assign( "arr_post", $arr_post );
$smarty->assign( "message" , $message  );

// エラーチェック
if( empty($message["ng"]) ) {
	// 表示
	$smarty->display("check.tpl");
} else {
	// 表示
	$smarty->display("index.tpl");
}
?>