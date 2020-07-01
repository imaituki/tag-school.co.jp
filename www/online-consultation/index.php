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
if( !empty( $_GET["y"] ) && !empty( $_GET["m"] ) && is_numeric( $_GET["y"] ) && is_numeric( $_GET["m"] ) && is_numeric( $_GET["d"] ) ) {
	$year  = date( "Y", mktime( 0, 0, 0, $_GET["m"], $_GET["d"], $_GET["y"] ) );
	$month = date( "m", mktime( 0, 0, 0, $_GET["m"], $_GET["d"], $_GET["y"] ) );
	$date  = date( "d", mktime( 0, 0, 0, $_GET["m"], $_GET["d"], $_GET["y"] ) );
}else{
	$year  = date( "Y" );
	$month = date( "m" );
	$date  = date( "d" );
}

$mst_calendar["display_date"] = date( "Y/m/d", mktime( 0, 0, 0, $month, $date, $year ) );
$mst_calendar["display_date_end"]  = date( "Y/m/d", strtotime( "+6 day", strtotime( $mst_calendar["display_date"] ) ) );

// カレンダー配列の作成
$start  = strtotime( $mst_calendar["display_date"] );
$end    = strtotime( $mst_calendar["display_date_end"] );
$oneday = 24 * 60 * 60;

while( $start <= $end ){

	// 日付の情報取得
	$y = date( "y"  , $start );
	$m = date( "m"  , $start );
	$d = date( "d"  , $start );
	$week  = (integer)date( "w",mktime( 0, 0, 0, $m, $d, $y ) );
	// 設定
	$calendar[$d]["day"]      = date( "Y-m-d",mktime( 0, 0, 0, $m, $d, $y ) );
	$calendar[$d]["week"]     = $week;
	$calendar[$d]["calendar"] = NULL;
	$calendar[$d]["resept"]  = NULL;

	// 一日すすめる
	$start += $oneday;
}

// カレンダー情報
$mst_calendar["calendar"]   = $calendar;
$mst_calendar["next_date"]  = date( "Y/m/d", strtotime( "+1 month", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["back_date"]  = date( "Y/m/d", strtotime( "-1 month", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["next_week"]  = date( "Y/m/d", strtotime( "+7 day", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["back_week"]  = date( "Y/m/d", strtotime( "-7 day", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["check_date"] = date( "YmdHi", strtotime( "+1 day" ) );
// 制限(1カ月先)
$mst_calendar["next_limit"] = date( "Y/m/d", strtotime( "+2 month" ) );

//----------------------------------------
// 祝日データを取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new FT_online_consultation_recept( $objManage );

foreach ($t_teacher as $teacher) {
	foreach ($OptionReserveTime as $time_id => $time) {

		// データ取得
		$t_calendar = $objCalendar->GetSearchList( array( "search_start_date" => date( "Y-m-d", strtotime( $mst_calendar["display_date"] ) ), "search_end_date" => date( "Y-m-d", strtotime( "+7 day", strtotime( $mst_calendar["display_date"] )  ) ), "teacher" => $teacher["id_online_consultation_teacher"], "time" => $time_id ) );
		if( !empty( $t_calendar ) && is_array( $t_calendar ) ){
			foreach ( $t_calendar as $key => $val ) {
				
				// 時間チェック
				$date = $val["date"] . " " . $OptionReserveTime[$time_id] . ":00";
				
				// 本日以降か？
				if( strtotime( $date ) > strtotime( date("Y/m/d H:i:00") ) ) {
					$mst_calendar["calendar"][date( "d", strtotime( $val["date"] ) )]["resept"][$teacher["id_online_consultation_teacher"]][$time_id] = 1;
				} else {
					$mst_calendar["calendar"][date( "d", strtotime( $val["date"] ) )]["resept"][$teacher["id_online_consultation_teacher"]][$time_id] = 2;
				}
			}
		}

	}
}

// クラス削除
unset( $objManage   );
unset( $objCalendar );

// 操作クラス
$objManage       = new DB_manage( _DNS );
$objReservations = new FT_online_consultation2( $objManage );

// 時間帯ごとの予約数
if( is_array($OptionReserveTime) ){
	foreach ($t_teacher as $teacher){
		$search_teacher = $teacher["id_online_consultation_teacher"];
		for ($i=0; $i < 7; $i++) {
			$search_date = date( "Y-m-d", strtotime( "+" . $i . " day", strtotime( $mst_calendar["display_date"] ) ) );
			foreach ($OptionReserveTime as $time_id => $time) {
				$search_time = $time_id;
				if( $objReservations->GetSearchCount( $search_date, $search_time, $search_teacher ) > 0 ){
					$reserved[$search_teacher][$i][$search_time] = 1;
				}else{
					$reserved[$search_teacher][$i][$search_time] = 0;
				}
			}
		}
	}

}


unset( $objManage, $objReservations );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレート設定
$smarty->assign( "mst_calendar", $mst_calendar );
$smarty->assign( "t_teacher", $t_teacher );
$smarty->assign( "reserved", $reserved );

$smarty->assign( "OptionWeek", $OptionWeek );
$smarty->assign( "OptionReserveTime", $OptionReserveTime );

// 表示
$smarty->display("index.tpl");
echo "<!--";
disp_arr($mst_calendar);
echo "-->";
?>
