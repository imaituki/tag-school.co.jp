<?php
//-------------------------------------------------------------------
// 作成日：2019/05/15
// 作成者：牧
// 内  容：ニュース
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  カレンダーの作成
//----------------------------------------
// カレンダー情報設定
if( !empty( $_GET["y"] ) && !empty( $_GET["m"] ) && is_numeric( $_GET["y"] ) && is_numeric( $_GET["m"] ) ) {
	$year  = date( "Y", mktime( 0, 0, 0, $_GET["m"], 1, $_GET["y"] ) );
	$month = date( "m", mktime( 0, 0, 0, $_GET["m"], 1, $_GET["y"] ) );
}else{
	$year  = date( "Y" );
	$month = date( "m" );
}
$date = 1;

$mst_calendar["display_date"] = date( "Y/m/d", mktime( 0, 0, 0, $month, $date, $year ) );

// カレンダー配列の作成
while( checkdate( $month, $date, $year ) ){
	// 日付の情報取得
	$day   = $date;
	$week  = (integer)date( "w",mktime( 0, 0, 0, $month, $date, $year ) );
	// 設定
	$calendar[$date]["day"]      = date( "Y-m-d",mktime( 0, 0, 0, $month, $date, $year ) );
	$calendar[$date]["week"]     = $week;
	$calendar[$date]["calendar"] = NULL;
	$calendar[$date]["holiday"]  = NULL;
	$date++;
}

// カレンダー情報
$mst_calendar["calendar"]   = $calendar;
$mst_calendar["next_date"]  = date( "Y/m/d", strtotime( "+1 month", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["back_date"]  = date( "Y/m/d", strtotime( "-1 month", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["check_date"] = date( "YmdHi", strtotime( "+1 day" ) );
// 制限(1カ月先)
$mst_calendar["next_limit"] = date( "Y/m/d", strtotime( "+2 month" ) );


//----------------------------------------
// 祝日データを取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new FT_online_consultation_holiday( $objManage );

// データ取得
$t_calendar = $objCalendar->GetSearchList( array( "search_start_date" => date( "Y-m-1", strtotime( $mst_calendar["display_date"] ) ), "search_end_date" => date( "Y-m-t", strtotime( $mst_calendar["display_date"] ) ) ) );
if( !empty( $t_calendar ) && is_array( $t_calendar ) ){
	foreach ( $t_calendar as $key => $val ) {
		$mst_calendar["calendar"][date( "j", strtotime( $val["date"] ) )]["holiday"] = 1;
	}
}
// クラス削除
unset( $objManage   );
unset( $objCalendar );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレート設定
$smarty->assign( "mst_calendar", $mst_calendar );

// 表示
$smarty->display("_index.tpl");
?>
