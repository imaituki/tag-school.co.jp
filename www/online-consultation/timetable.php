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

// 選択日
if( !empty( $arr_get["y"] ) && !empty( $arr_get["m"] ) && !empty( $arr_get["d"] ) && is_numeric( $arr_get["y"] ) && is_numeric( $arr_get["m"] ) && is_numeric( $arr_get["y"] ) ){
	$select_date = date( "Y-m-d",mktime( 0, 0, 0, $arr_get["m"], $arr_get["d"], $arr_get["y"] ) );
}else{
	header( "Location: /online-consultation/" );
}

// 操作クラス
$objManage       = new DB_manage( _DNS );
$objReservations = new FT_online_consultation( $objManage );

// 予約設定
$t_reserve_setting = $objReservations->GetReserveSetting( 1 );

// 時間帯ごとの予約数
if( is_array($OptionReserveTime) ){
	foreach( $OptionReserveTime as $key => $val ){
		$count[$key] = $objReservations->GetSearchCount( $select_date, $key );
	}
}


unset( $objManage, $objReservations );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレートに設定
$smarty->assign( "select_date"      , $select_date       );
$smarty->assign( "t_reserve_setting", $t_reserve_setting );
$smarty->assign( "count"            , $count             );
$smarty->assign( "OptionReserveTime"  , $OptionReserveTime  );
$smarty->assign( "OptionWeek"         , $OptionWeek         );

// 表示
$smarty->display("timetable.tpl");

?>
