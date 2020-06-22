<?php
//-------------------------------------------------------------------
// 作成日：2017/06/07
// 作成者：鈴木
// 内  容：空予約
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );

//----------------------------------------
//  カレンダーの作成
//----------------------------------------
// カレンダー情報設定
if( !empty( $_GET ) && is_numeric( $_GET["y"] ) && is_numeric( $_GET["m"] ) ) {
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
$objCalendar = new AD_online_consultation( $objManage );

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
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"]   = "Web予約";
// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  表示
//----------------------------------------
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートの設定
$smarty->assign( "message"     , $message );
$smarty->assign( "arr_post"    , $arr_post  );
$smarty->assign( "mst_calendar", $mst_calendar );

// オプション設定
$smarty->assign( "OptionReserveTime" , $OptionReserveTime );
$smarty->assign( "OptionWeek"       , $OptionWeek        );
$smarty->assign( "OptionGrade"      , $OptionGrade       );
$smarty->assign( "OptionSex"        , $OptionSex         );

// 表示
$smarty->display("index.tpl");
?>
