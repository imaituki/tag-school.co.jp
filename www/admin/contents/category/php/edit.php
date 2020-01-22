<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: カテゴリ 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  編集データ取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// データ取得
$_POST = $objCategory->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage   );
unset( $objCategory );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_category"] ) ) {
	
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "category/";

	// 表示
	$smarty->display( "edit.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";

	// 表示
	header( "Location: ./index.php" );

}
?>