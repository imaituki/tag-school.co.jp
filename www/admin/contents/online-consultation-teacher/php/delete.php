<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage          = new DB_manage( _DNS );
$objArticleCategory = new AD_online_consultation_teacher( $objManage );

// トランザクション
$objArticleCategory->_DBconn->StartTrans();

// 削除
$res = $objArticleCategory->delete( $arr_post["id"] );

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
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>
