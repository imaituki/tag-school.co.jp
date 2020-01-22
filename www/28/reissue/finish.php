<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/10
// 作成者: yamada
// 内  容: Mypage パスワード再発行 完了
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "パスワード再発行 完了";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";

// 登録したメールアドレス取得
if( !empty($_SESSION["front"]["mypage"]["reissue"]["POST"]["mail"]) ){
	$arr_post["mail"] = $_SESSION["front"]["mypage"]["reissue"]["POST"]["mail"];
	unset( $_SESSION["front"]["mypage"]["reissue"]["POST"]["mail"] );
}


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "mypage/reissue/";

$smarty->assign( "arr_post", $arr_post );

// 表示
$smarty->display("finish.tpl");
?>