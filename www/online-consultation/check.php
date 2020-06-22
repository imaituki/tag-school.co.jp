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
//  初期化
//----------------------------------------
$message   = NULL;

//----------------------------------------
//  チェック
//----------------------------------------
// クラス呼び出し
$objManage  = new DB_manage( _DNS );
$objReservations = new FT_online_consultation( $objManage );

// 文字エンコード
$arr_post = $objReservations->convert( $arr_post );

$message = $objReservations->check( $arr_post );

// クラス削除
unset( $objManage  );
unset( $objReservations );

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "online-consultation/";

// テンプレートに設定
$smarty->assign( "message" , $message  );
$smarty->assign( "arr_post", $arr_post );

//オプション配列
$smarty->assign( "OptionReserveTime", $OptionReserveTime );
$smarty->assign( "OptionWeek"       , $OptionWeek        );
$smarty->assign( "OptionGrade"      , $OptionGrade       );
$smarty->assign( "OptionSex"        , $OptionSex         );

//エラーチェック
if( empty( $message["ng"] ) ) {

	// 表示
	$smarty->display("check.tpl");

} else {

	// 表示
	$smarty->display("form.tpl");

}
?>
