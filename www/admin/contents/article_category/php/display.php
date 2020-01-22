<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ 一括表示切替
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  表示切替
//----------------------------------------
// 操作クラス
$objManage          = new DB_manage( _DNS );
$objArticleCategory = new AD_article_category( $objManage );

// トランザクション
$objArticleCategory->_DBconn->StartTrans();

// 表示切り替え
$res = $objArticleCategory->changeDisplay( $arr_post["id"], $arr_post["display_flg"] );

// ロールバック
if( $res == false ) {
	$objArticleCategory->_DBconn->RollbackTrans();
}

// コミット
$objArticleCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage          );
unset( $objArticleCategory );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "表示切り替えに失敗しました。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "表示切り替え完了しました。<br />" ) );
}
?>