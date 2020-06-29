<?php
//-------------------------------------------------------------------
// 作成日：2018/03/29
// 作成者：牧
// 内  容：祝日カレンダー 一覧表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["company"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["company"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["company"][_CONTENTS_DIR]["message"] );

//----------------------------------------
//  検索条件
//----------------------------------------
// 期間
// if( !empty( $_GET ) && is_numeric( $_GET["y"] ) ) {
// 	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 1, $_GET["y"]     ) );
// 	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 0, $_GET["y"] + 1 ) );
// }else{
// 	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 1, date( "Y" )     ) );
// 	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, 1, 0, date( "Y" ) + 1 ) );
// }

if( !empty( $_GET ) && is_numeric( $_GET["y"] ) && is_numeric( $_GET["m"] ) && is_numeric( $_GET["d"] ) ){
	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, $_GET["m"], $_GET["d"]     , $_GET["y"] ) );
	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, $_GET["m"], $_GET["d"] + 6 , $_GET["y"] ) );
}else{
	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, date("m"), date("d")     , date( "Y" ) ) );
	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, date("m"), date("d") + 6 , date( "Y" ) ) );
}

//----------------------------------------
//  カレンダーの取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new AD_online_consultation_recept( $objManage );

foreach ($OptionTeacher as $teacher_id => $teacher) {

	foreach ($OptionReserveTime as $time_id => $time) {

		$arr_post["teacher"] = $teacher_id;
		$arr_post["time"] = $time_id;

		// データ取得
		$tmp_calendar = $objCalendar->GetSearchList( $arr_post );

		// データ整理
		if( is_array( $tmp_calendar ) ) {
			foreach( $tmp_calendar as $key => $val ) {
				$t_calendar[$val["date"]][$teacher_id][$time_id]["id"] = $val["id_online_consultation_recept"];
			}
		}

	}

}

// クラス削除
unset( $objManage   );
unset( $objCalendar );

//----------------------------------------
//  カレンダーの作成
//----------------------------------------
// カレンダー情報設定
$start  = strtotime( $arr_post["date1"] );
$end    = strtotime( $arr_post["date2"] );
$oneday = 24 * 60 * 60;

// カレンダー配列の作成
if( $start <= $end ) {

	while( $start <= $end ) {

		// 日付の情報取得
		$ymd   = date( "Ymd", $start );
		$ym    = date( "Ym" , $start );
		$d     = date( "d"  , $start );

		// 曜日設定
		$calendar[$ymd]["week"] = (integer)date( "w", $start );

		// 受付枠設定
		if( !empty( $t_calendar[$ymd] ) ){
			$calendar[$ymd]["calendar"] = $t_calendar[$ymd];
		}else{
			$calendar[$ymd]["calendar"] = NULL;
		}

		// 一日すすめる
		$start += $oneday;

	}

	// カレンダー情報
	$mst_calendar["calendar"]     = $calendar;
	$mst_calendar["display_date1"] = $arr_post["date1"];
	$mst_calendar["display_date2"] = $arr_post["date2"];
	$mst_calendar["next_week"]    = date( "Y/m/d", strtotime( "+7 day ", strtotime( $arr_post["date1"] ) ) );
	$mst_calendar["back_week"]    = date( "Y/m/d", strtotime( "-7 day ", strtotime( $arr_post["date1"] ) ) );

}

//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートに設定
$smarty->assign( "mst_calendar", $mst_calendar );


$smarty->assign( "OptionWeek", $OptionWeek );
$smarty->assign( "OptionReserveTime", $OptionReserveTime );
$smarty->assign( "OptionTeacher", $OptionTeacher );

// 表示
$smarty->display("index.tpl");
?>
