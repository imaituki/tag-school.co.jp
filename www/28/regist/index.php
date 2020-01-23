<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: マイページ 新規会員登録
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  本登録の場合
//----------------------------------------
if( !empty($arr_get["user"]) ){
	$arr_post["user"] = addslashes( $arr_get["user"] );
}
if( !empty($arr_get["id"]) ){
	$arr_post["id"] = addslashes( $arr_get["id"] );
}

//----------------------------------------
//  本登録が完了した場合は、ログインページに飛ばす
//----------------------------------------
$objManage = new DB_manage( _DNS );
$objMember = new FT_member($objManage);

$member = $objMember->GetMember( $arr_post );

// クラス削除
unset( $objManage );
unset( $objMember );

if( !empty($member["password"]) ){
	header( "Location: ". $_FRONT["home"]. "/". $_DIR_NAME. "/login.php" );
	exit;
}


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
if( empty($arr_post["user"]) ){
	$_HTML_HEADER["title"] = "新規会員登録";
}else{
	$_HTML_HEADER["title"] = "会員本登録";
}

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/regist/";

$smarty->assign( "arr_post", $arr_post );
$smarty->assign( "member"  , $member   );

// 表示
$smarty->display("index.tpl");
?>