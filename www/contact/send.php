<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/21
// 作成者: yamada
// 内  容: お問い合わせ 送信
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  初期化
//----------------------------------------
$message = NULL;

// 操作クラス
$objManage  = new DB_manage( _DNS, 1 );
$objContact = new FT_contact( $objManage, $_ARR_MAIL[$_DIR_NAME]["savePath"] );

// データ変換
$arr_post = $objContact->convert( $arr_post );

// データチェック
$message = $objContact->check( $arr_post, 'insert' );


// エラーチェック
if( empty($message["ng"]) ) {

	// トランザクション
	$objContact->_DBconn->StartTrans();

	// 登録処理
	$res = $objContact->insert( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objContact->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objContact->_DBconn->CompleteTrans();

}


//----------------------------------------
//  メール送信
//----------------------------------------
// エラーチェック
if( empty($message["ng"]) ) {

	//----------------------------------------
	//  メール送信
	//----------------------------------------
	// メール設定情報の取得
	$mail_conf = $objContact->GetDataXml( $objContact->GetArrayXml() );

	// データ変換
	if( !empty( $arr_post["mail"] ) ) {
		$arr_post["mail"] = mb_convert_kana( $arr_post["mail"], "a", "utf-8" );
	}


	//----------------------------------------
	//  文字コード設定
	//----------------------------------------
	// 言語設定
	mb_language("Japanese");

	// 内部エンコーディング
	mb_internal_encoding("UTF-8");


	//----------------------------------------
	//  メール生成
	//----------------------------------------
	// smarty設定
	$smarty = new MySmarty("front");
	$smarty->compile_dir .= $_DIR_NAME. "/";

	// テンプレートに設定
	$smarty->assign( "arr_post" , $arr_post  );
	$smarty->assign( "mail_conf", $mail_conf );
	$smarty->assign( "message"  , $message   );

	$smarty->assign( "OptionContent", $OptionContent );
	$smarty->assign( "OptionGrade"  , $OptionGrade   );
	$smarty->assign( "OptionRequest", $OptionRequest );

	// テンプレートの取得
	$mail = $smarty->fetch( "mail.tpl" );

	// 管理者宛てのメールにユーザーエージェントを記載
	$mail2 = $mail. "\n\n--------------------------------------------------------
■ お客様の環境情報
--------------------------------------------------------
■ IPアドレス
". $_SERVER["REMOTE_ADDR"]. "
■ ユーザーエージェント
". $_SERVER["HTTP_USER_AGENT"]. "

--------------------------------------------------------";

	// 改行
	$mail1 = str_replace( "\r", "\n", str_replace( "\r\n", "\n", ( $mail_conf["user"]["header"] . "\n\n" . $mail . "\n" . $mail_conf["user"]["footer"] ) ) );
	$mail2 = str_replace( "\r", "\n", str_replace( "\r\n", "\n", ( $mail_conf["master"]["header"] . "\n\n" . $mail2 . "\n" . $mail_conf["master"]["footer"] ) ) );

	// 保護者名があれば、保護者名で表示。そうでなければ本人の名で表示
	if( !empty($arr_post["name2"]) ){
		$name = $arr_post["name2"]; // 保護者名
	}else{
		$name = $arr_post["name1"]; // 生徒名
	}


	//----------------------------------------
	//  お客様用
	//----------------------------------------
	// ヘッダー
	$header1  = "From: " . mb_encode_mimeheader( $name ) . " <" . $mail_conf["info"]["admin_mail"] . ">\n";
	$header1 .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header1 .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header1 .= "Content-Transfer-Encoding: 7bit\n";

	// お客様へ
	$error_flg1 = mb_send_mail( $arr_post["mail"], $mail_conf["user"]["title"], $mail1, $header1 );


	//----------------------------------------
	//  管理宛
	//----------------------------------------
	// ヘッダー
	$header2  = "From: " . mb_encode_mimeheader( $name ) . " <" . $arr_post["mail"] . ">\n";
	$header2 .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header2 .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header2 .= "Content-Transfer-Encoding: 7bit\n";

	// 管理者へ
	$error_flg2 = mb_send_mail( $mail_conf["info"]["admin_mail"], $mail_conf["master"]["title"], $mail2, $header2 );

 	// 送信チェック
 	if( empty( $error_flg1 ) || empty( $error_flg2 ) ) {
 		$message["ng"] = "メール送信に失敗しました。";
 	}

}

// クラス削除
unset( $objManage );
unset( $objContact );

echo 777;
exit;
//----------------------------------------
//  表示
//----------------------------------------
// エラーチェック
if( empty( $message["ng"] ) ) {

	// セッションスタート
	@session_start();

	// 変数を渡す
	$_SESSION["front"][$_DIR_NAME]["POST"]["mail"] = $arr_post["mail"];

	// 終了画面へ
	header( "Location: ./finish.php" );
	exit;

} else {

	// フォームへ
	header( "Location: ./index.php" );
	exit;
}
?>