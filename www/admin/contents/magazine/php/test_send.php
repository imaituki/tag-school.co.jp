<?php
//-------------------------------------------------------------------
// 作成日: 2020/01/06
// 作成者: yamada
// 内  容: メール配信 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage, $_ARR_MAIL["magazine"]["savePath"] );

// メールマガジン 取得
$magazine = $mainObject->GetSearchList( array("send_flg" => 1), array("fetch" => _DB_FETCH_ALL) );
$magazine = $magazine[0];


//----------------------------------------
//  メール送信
//----------------------------------------
// エラーチェック
if( !empty($magazine) ) {
	
	//----------------------------------------
	//  データ変換
	//----------------------------------------
	// メール設定情報の取得
	$mail_conf = $mainObject->GetDataXml( $mainObject->GetArrayXml() );
	
	// データ変換
	$arr_post["mail"] = mb_convert_kana( $arr_post["mail"], "a", "utf-8" );

	
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
	$smarty->compile_dir .= _CONTENTS_DIR;
	
	// テンプレートに設定
	$smarty->assign( "arr_post" , $arr_post  );
	$smarty->assign( "magazine" , $magazine  );
	$smarty->assign( "mail_conf", $mail_conf );
	$smarty->assign( "message"  , $message   );
	
	// 改行
	$mail2 = str_replace( "\r", "\n", str_replace("\r\n", "\n", ($magazine["header"] . "\n\n" . $magazine["main"] . "\n\n" . $magazine["footer"])) );
	

	//----------------------------------------
	//  管理宛
	//----------------------------------------
	// ヘッダー
	$header2  = "From: " . mb_encode_mimeheader( "テスト送信" ) . " <" . $mail_conf["info"]["admin_mail"] . ">\n";
	$header2 .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header2 .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header2 .= "Content-Transfer-Encoding: 7bit\n";
	
	// お客様へ
	$mail_to = $mail_conf["info"]["admin_mail"];
	if( !empty($arr_post["mail"]) ){
		$mail_to .= ",". $arr_post["mail"];
	}

	$error_flg2 = mb_send_mail( $mail_to, "[TEST]". $magazine["title"], $mail2, $header2 );
	
	// ロールバック
	if( empty($error_flg2) ) {
		// 送信失敗
		$message["ng"]["all"] = _ERRHEAD . "テスト送信に失敗しました。<br />";

	}else{
		// 送信成功
		$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "テスト送信を完了しました。<br />";
		
		// 一覧に戻る
		header( "Location: ./test.php" );
		
	}
	
}

// クラス削除
unset( $objManage  );
unset( $mainObject );

?>