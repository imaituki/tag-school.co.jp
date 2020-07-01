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
if( !empty( $arr_get["y"] ) && !empty( $arr_get["m"] ) && !empty( $arr_get["d"] ) && !empty( $arr_get["t"] ) && !empty( $arr_get["teacher"] ) && !empty( $OptionReserveTime[ $arr_get["t"] ] && !empty( $OptionTeacher[ $arr_get["teacher"] ] ) ) && is_numeric( $arr_get["y"] ) && is_numeric( $arr_get["m"] ) && is_numeric( $arr_get["d"] ) && is_numeric( $arr_get["t"] ) && is_numeric( $arr_get["teacher"] ) ){
	$arr_post["date"] = date( "Y-m-d",mktime( 0, 0, 0, $arr_get["m"], $arr_get["d"], $arr_get["y"] ) );
	$arr_post["time"] = $arr_get["t"];
	$arr_post["teacher"] = $arr_get["teacher"];
}elseif( empty($arr_post["date"]) || empty($arr_post["time"] ) ){
	header( "Location: /online-consultation/" );
}

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレート設定
$smarty->assign( "arr_post", $arr_post );

//オプション配列
$smarty->assign( "OptionReserveTime", $OptionReserveTime );
$smarty->assign( "OptionWeek"       , $OptionWeek        );
$smarty->assign( "OptionGrade"      , $OptionGrade       );
$smarty->assign( "OptionSex"        , $OptionSex         );
$smarty->assign( "OptionTeacher"    , $OptionTeacher     );

// 表示
$smarty->display("form.tpl");
?>
