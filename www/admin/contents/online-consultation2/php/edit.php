<?php
//-------------------------------------------------------------------
// 作成日： 2018/03/29
// 作成者： 牧
// 内  容： 来院予約 編集
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
$objCalendar = new AD_online_consultation2( $objManage );

// データ取得
$_POST = $objCalendar->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage   );
unset( $objCalendar );


//----------------------------------------
//  表示
//----------------------------------------
if( !empty( $_POST["id_online_consultation"] ) ) {


	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR. "/";

	//オプシン配列
	$smarty->assign( "OptionReserveTime" , $OptionReserveTime );
	$smarty->assign( "OptionWeek"       , $OptionWeek        );
	$smarty->assign( "OptionGrade"      , $OptionGrade       );
	$smarty->assign( "OptionSex"        , $OptionSex         );
	$smarty->assign( "OptionTeacher"        , $OptionTeacher         );

	// 表示
	$smarty->display( "edit.tpl" );

} else {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ng"] = "データの取得に失敗しました。<br />";

	// 表示
	header( "Location: ./index.php" );

}

?>
