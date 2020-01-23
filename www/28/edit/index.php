<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/09
// 作成者: yamada
// 内  容: Mypage 会員情報編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
$objManage = new DB_manage( _DNS );
$objMember = new FT_member( $objManage );

// 未入力の時のデータ取得
if( empty($arr_post) ){
	$arr_post = $objMember->GetIdRow( $_COOKIE["mem_id_member"] );
	
}

// クラス削除
unset( $objManage );
unset( $objMember );


//----------------------------------------
//  メッセージ
//----------------------------------------
if( $_SESSION["front"][$_DIR_NAME]["edit"]["POST"]["succeed"] == 1 ){
	$message["succeed"] = "会員情報を更新しました。";

}elseif( $_SESSION["front"][$_DIR_NAME]["edit"]["POST"]["succeed"] == 0 ){
	$message["fail"] = "会員情報の更新に失敗しました。";

}
unset( $_SESSION["front"][$_DIR_NAME]["edit"]["POST"] );


//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "会員情報編集";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= $_DIR_NAME. "/edit/";

$smarty->assign( "message" , $message  );
$smarty->assign( "arr_post", $arr_post );

// 表示
$smarty->display("index.tpl");
?>