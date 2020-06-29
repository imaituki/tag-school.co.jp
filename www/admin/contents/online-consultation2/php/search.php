<?php
//-------------------------------------------------------------------
// 作成日: 2019/12/26
// 作成者: yamada
// 内  容: 28カテゴリ 検索
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  SESSION設定
//----------------------------------------
if( empty( $arr_post["search_teacher"] ) ) {
	$arr_post["search_teacher"] = null;
}
$_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] = $arr_post;

//----------------------------------------
//  カレンダーの作成
//----------------------------------------
// カレンダー情報設定
if( !empty( $arr_post["search_date_start"] && $arr_post["search_date_end"] ) ) {
	$year  = date( "Y", strtotime( $arr_post["search_date_start"] ) );
	$month = date( "m", strtotime( $arr_post["search_date_start"] ) );
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
	$calendar[$date]["week"]     = $week;
	$calendar[$date]["calendar"] = NULL;
	$date++;
}

// カレンダー情報
$mst_calendar["calendar"]     = $calendar;
$mst_calendar["next_date"]    = date( "Y/m/d", strtotime( "+1 month", strtotime( $mst_calendar["display_date"] ) ) );
$mst_calendar["back_date"]    = date( "Y/m/d", strtotime( "-1 month", strtotime( $mst_calendar["display_date"] ) ) );


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new AD_online_consultation2( $objManage );

// 検索月の設定
$arr_post["search_date_start"] = date( "Y/m/01", strtotime( $mst_calendar["display_date"] ) );
$arr_post["search_date_end"]   = date( "Y/m/t", strtotime( $mst_calendar["display_date"] ) );

// データ取得
$t_reserve  = $objCalendar->GetSearchCalendarList( $arr_post );

if( !empty( $t_reserve ) && is_array( $t_reserve ) ){
	foreach ( $mst_calendar["calendar"] as $key => $val ) {
		foreach ( $t_reserve as $key2 => $val2 ) {
			if( $key == date( "j", strtotime( $val2["date"] ) ) ){
				$mst_calendar["calendar"][$key]["calendar"][] = $val2;
			}
		}
	}
}

// クラス削除
unset( $objManage   );
unset( $objCalendar );


//----------------------------------------
//  表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートに設定
// $smarty->assign( "page_navi" , $t_teacher["page"] );
$smarty->assign( "mst_calendar", $mst_calendar );
$smarty->assign( "arr_post"    , $arr_post     );

// オプション設定
$smarty->assign( "OptionReserveTime" , $OptionReserveTime );
$smarty->assign( "OptionWeek"       , $OptionWeek        );
$smarty->assign( "OptionGrade"      , $OptionGrade       );
$smarty->assign( "OptionSex"        , $OptionSex         );
$smarty->assign( "OptionTeacher"        , $OptionTeacher         );

// 表示
$smarty->display("list.tpl");
?>
