<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: カテゴリ 一括削除
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  削除処理
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// トランザクション
$objCategory->_DBconn->StartTrans();

// 削除
$res = $objCategory->delete( $arr_post["id"] );

// ロールバック
if( $res == false ) {
	$objCategory->_DBconn->RollbackTrans();
}

// コミット
$objCategory->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage   );
unset( $objCategory );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "削除するデータを選択してください。<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "削除完了しました。<br />" ) );
}
?>