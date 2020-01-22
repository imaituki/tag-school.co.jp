<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: カテゴリ 一括表示切替
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示切替
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// トランザクション
$objCategory->_DBconn->StartTrans();

// 表示切り替え
$res = $objCategory->changeDisplay( $arr_post["id"], $arr_post["display_flg"] );

// ロールバック
if( $res == false ) {
	$objCategory->_DBconn->RollbackTrans();
}

// コミット
$objCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage          );
unset( $objCategory );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "表示切り替えに失敗しました。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "表示切り替え完了しました。<br />" ) );
}
?>