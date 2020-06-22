<?php
//-------------------------------------------------------------------
// 作成日：2020/01/23
// 作成者：iw
// 内  容：トップページ
//-------------------------------------------------------------------
//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ取得
//----------------------------------------
// 操作クラス
$objManage      = new DB_manage( _DNS );
$objInformation = new FT_information( $objManage );

// お知らせ取得(最新3件まで)
$t_information = $objInformation->GetSearchList( $arr_post, array("fetch" => _DB_FETCH_ALL), 3 );

// お知らせカテゴリー
$OptionCategory = $objInformation->GetOption();

// クラス削除
unset( $objInformation );
unset( $objManage );


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "";

$smarty->assign( "t_information" , $t_information  );
$smarty->assign( "OptionCategory", $OptionCategory );

// 表示
$smarty->display("index.tpl");
?>
