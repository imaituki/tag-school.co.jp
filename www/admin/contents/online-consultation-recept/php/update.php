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


//-----------------------------------------
// カレンダー更新
//-----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCalendar = new AD_online_consultation_recept( $objManage );

// トランザクション
$objCalendar->_DBconn->StartTrans();

$temp = explode( "_", $arr_post["send"] );
$arr_post["id"] = $temp[0];
$arr_post["teacher"] = $temp[1];
$arr_post["date"] = $temp[2];
$arr_post["time"] = $temp[3];
unset($arr_post["send"]);

$date["y"] = substr( $arr_post["display_date"], 0, 4 );
$date["m"] = substr( $arr_post["display_date"], 4, 2 );
$date["d"] = substr( $arr_post["display_date"], 6, 2 );
unset( $arr_post["display_date"] );


// データチェック
if( $arr_post["id"] != 0 ) {

	// 削除
	$res = $objCalendar->delete( $arr_post["id"] );

	// ロールバック
	if( $res == false ) {
		$objCalendar->_DBconn->RollbackTrans();
	}

} else {

	unset($arr_post["id"]);

	// データ変換
	$arr_post = $objCalendar->convert( $arr_post );

	// データ加工
	$arr_post["date"]       = date( "Y-m-d", mktime(0, 0, 0, substr( $arr_post["date"], 4, 2), substr( $arr_post["date"], 6, 2 ), substr( $arr_post["date"], 0, 4 ) ) );
	$arr_post["entry_date"] = date( "Y-m-d H:i:s" );

	// 登録処理
	$res = $objCalendar->insert( $arr_post );

}

// コミット
$objCalendar->_DBconn->CompleteTrans();


//----------------------------------------
//  検索条件
//----------------------------------------
// 期間
if( !empty( $date ) && is_numeric( $date["y"] ) && is_numeric( $date["m"] ) && is_numeric( $date["d"] ) ){
	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, $date["m"], $date["d"]     , $date["y"] ) );
	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, $date["m"], $date["d"] + 6 , $date["y"] ) );
}else{
	$arr_post["date1"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, date("m"), date("d")     , date( "Y" ) ) );
	$arr_post["date2"] = date( "Y/m/d H:i:s", mktime( 0, 0, 0, date("m"), date("d") + 6 , date( "Y" ) ) );
}


//----------------------------------------
//  カレンダーの取得
//----------------------------------------
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

		// 休業日設定
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
$smarty->display("list.tpl");
?>
