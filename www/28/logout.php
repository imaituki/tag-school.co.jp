<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/08
// 作成者: yamada
// 内  容: Mypage logout
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// メンバー操作クラス
$objManage = new DB_manage( _DNS );
$objMember = new FT_member( $objManage );

// データ取得
$objMember->logout();

// クラス削除
unset( $objMember );


//----------------------------------------
//  表示
//----------------------------------------
// ログイン画面へ
header( "Location: /mypage/login.php" );
exit;

?>