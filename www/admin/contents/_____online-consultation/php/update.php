<?php
//-------------------------------------------------------------------
// 作成日：2017/05/25
// 作成者：岩崎
// 内  容：予約編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new AD_online_consultation( $objManage );

// データ変換
$arr_post = $objCalendar->convert( $arr_post );

// データチェック
$message = $objCalendar->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objCalendar->_DBconn->StartTrans();

	// 登録処理
	$res = $objCalendar->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objCalendar->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objCalendar->_DBconn->CompleteTrans();

}

// クラス削除
unset( $objManage   );
unset( $objCalendar );

//----------------------------------------
//  表示
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	$date  = date_create( $arr_post["date"] );
	$year  = date_format( $date , "Y" );
	$month = date_format( $date , "m" );

	// 表示
	header( "Location: ./index.php?y=" . $year . "&m=" . $month );

} else {

	//----------------------------------------
	//  表示
	//----------------------------------------
	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	// テンプレートに設定
	$smarty->assign( "arr_post" , $arr_post  );
	$smarty->assign( "message"  , $message   );

	// オプション配列
	$smarty->assign( "OptionReserveTime" , $OptionReserveTime );
	$smarty->assign( "OptionWeek"       , $OptionWeek        );
	$smarty->assign( "OptionGrade"      , $OptionGrade       );
	$smarty->assign( "OptionSex"        , $OptionSex         );

	// 表示
	$smarty->display( "edit.tpl" );

}
?>
