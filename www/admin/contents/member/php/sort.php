<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/27
// 作成者: yamada
// 内  容: 会員 ソート
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  ソート処理
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objMember = new AD_member( $objManage );

// トランザクション
$objMember->_DBconn->StartTrans();

// ソート
$res = $objMember->sort( $arr_post["sort"], "id_member" );

// ロールバック
if( $res == false ) {
	$objMember->_DBconn->RollbackTrans();
}

// コミット
$objMember->_DBconn->CompleteTrans();

// クラス削除
unset( $objManage );
unset( $objMember );

// 戻り値
if( $res == false ) {
	echo json_encode( array( "result" => "false", "message" => "並び順の変更に失敗しました。（F5ボタンを押して一度ページを更新してください）<br />" ) );
} else {
	echo json_encode( array( "result" => "true", "message" => "並び順の変更が完了しました。<br />" ) );
}
?>