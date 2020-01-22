<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: カテゴリ ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// トランザクション
$objCategory->_DBconn->StartTrans();

// ソート
$res = $objCategory->sort( $arr_post["sort"], "id_category" );

// ロールバック
if( $res == false ) {
	$objCategory->_DBconn->RollbackTrans();
}

// コミット
$objCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objCategory   );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>