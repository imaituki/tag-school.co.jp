<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: Mypage ログイン
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//------------------------------------------
// mypage ログインチェック
//------------------------------------------
// 既にログインしている場合mypageへリダイレクト
if( !empty($_COOKIE["mem_id_member"]) && $_COOKIE["mem_ssid"] == session_id() ) {
	header( "Location: /mypage/" );
	exit;
}


//----------------------------------------
//  認証
//----------------------------------------
if ( !empty($arr_post["mail"]) && !empty($arr_post["password"]) ) {

	// クラスをインスタンス化
	$objManage = new DB_manage( _DNS );
	$objMember = new FT_member( $objManage );

	// データ取得
	$res = $objMember->login( $arr_post["mail"], $arr_post["password"] );

	// クラス削除
	unset( $objManage );
	unset( $objMember );


}elseif( !empty($arr_post) ){
	// POSTはしているが、メールとパスワードが無い場合
	$res["message"]["ng"]["error"] = _ERRHEAD . "ログインIDまたはパスワードは必ず入力してください。<br />";

}


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "ログイン";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  表示
//----------------------------------------
if( isset( $res["result"] ) && $res["result"] == true ) {

	// マイページTOPへ移動
	header( "Location: /mypage/" );
	exit;
	
} else {
	// smarty設定
	$smarty = new MySmarty("front");
	$smarty->compile_dir .= "mypage/";

	// テンプレートに設定
	$smarty->assign( "message", $res["message"] );

	// 表示
	$smarty->display("login.tpl");

}
?>