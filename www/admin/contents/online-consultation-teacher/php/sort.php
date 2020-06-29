<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage          = new DB_manage( _DNS );
$objArticleCategory = new AD_online_consultation_teacher( $objManage );

// トランザクション
$objArticleCategory->_DBconn->StartTrans();

// ソート
$res = $objArticleCategory->sort( $arr_post["sort"], "id_online_consultation_teacher" );

// ロールバック
if( $res == false ) {
	$objArticleCategory->_DBconn->RollbackTrans();
}

// コミット
$objArticleCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objArticleCategory   );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>
