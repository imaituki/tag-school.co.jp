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

// 会員データ 取得
$mst_member = $mainObject->GetMember();


// エラーチェック
if( isset($magazine["id_magazine"]) ){

	//----------------------------------------
	//  データ変換
	//----------------------------------------
	// メール設定情報の取得
	$mail_conf = $mainObject->GetDataXml( $mainObject->GetArrayXml() );
	
	
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
	$smarty->assign( "magazine" , $magazine  );
	$smarty->assign( "mail_conf", $mail_conf );
	$smarty->assign( "message"  , $message   );


	//----------------------------------------
	// メール設定
	//----------------------------------------
	// ヘッダー
	$header  = "From: " . mb_encode_mimeheader( "TAG" ) . " <" . $mail_conf["info"]["admin_mail"] . ">\n";
	$header .= "Bcc: "  . $mail_conf["info"]["bcc_mail"] . "\n";
	$header .= "Content-Type: text/plain; charset=iso-2022-jp\n";
	$header .= "Content-Transfer-Encoding: 7bit\n";
	
	// サブジェクト
	$subject = $magazine["title"];


	//----------------------------------------
	//  メール送信
	//----------------------------------------
	// カウントを初期化
	$count = 0;
	$num = count( $mst_member );
	
	if( empty( $magazine["post_num"] ) ){
		$magazine["post_num"] = 0;
	}
	
	// ループ
	while( $count < $num ) {
		
		// 中身
		$body  = $magazine["header"];
		$body .= "\n\n";
		
		if( !empty( $mst_member[$count]["name1"] ) ){
			$body .= $mst_member[$count]["name1"] . $mst_member[$count]["name2"] . "様\n";
			$body .= "\n\n";
		}else{
			$body .= $mst_member[$count]["mail"] . "様\n";
			$body .= "\n\n";
		}
		
		$body .= $magazine["main"];
		$body .= "\n";
		
		//$body .= "----------\n";
		//$body .= "メルマガの登録を解除するには下記のリンクをクリックして下さい。\n";
		//$body .= "http://www.dadaco.co.jp/edit2.php?id=###mst_member_id###\n";
		$body .= "\n";
		
		$body .= $magazine["footer"];
		
		// 改行を処理
		$body = str_replace( "\r", "\n", str_replace( "\r\n", "\n", $body ) );
		
		// <>を処理
		$body = str_replace( "&amp;", "&", $body );
		$body = str_replace( "&lt;", "<", $body );
		$body = str_replace( "&gt;", ">", $body );
		
		// IDを処理
		//$code = $member[$count]["id_member"] . "&code=" . $member[$count]["code"];
		//$body = str_replace( "###member_id###", $code, $body );
		
		// メールアドレス
		$mail = $mst_member[$count]["mail"];

		$body = mb_convert_kana( $body, "KV" );
		$error_flg1 = mb_send_mail( $mail, $subject, $body, $header );
		
		// 送信メンバー
		$magazine["id_member_list"] .= $mst_member[$count]["id_member"] . "@";
		$magazine["post_num"] += 1;
		
		// カウントアップ
		$count++;
		
		// 51,101,151 … の場合に停止
		if( $count > 50 && $count % 50 == 1 ){
			
			// 管理側に送信
			$subject2   = "[" . $mst_member[$count]["id_member"] . "]" . $magazine["title"];
			$error_flg2 = mb_send_mail( $mail_conf["info"]["admin_mail"], $subject2, $body, $header );
			
			// スリープ
			sleep(100);
		}
		
		unset( $body, $code );
	}
	
	
	// ラスト用
	$num2  = $num;
	$num2 -= 1;
	
	// ラスト追加
	$body  = $magazine["title"];
	$body .= "\n\n----------\n";
	$body .= "送信レポート\n";
	$body .= "送信数：" . $count ;
	
	// 管理側に送信
	$subject2   = "[Last:" . $mst_member[$num2]["id_member"] . "]" . $magazine["title"];
	$error_flg2 = mb_send_mail( $mail_conf["info"]["admin_mail"], $subject2, $body, $header );
//	$error_flg2 = mb_send_mail( $mail_conf["info"]["admin_mail"], $subject, $body, $header );
	
	
	//----------------------------------------
	//  送信数保存
	//----------------------------------------
	// トランザクション
	$mainObject->_DBconn->StartTrans();

	// 登録処理
	$mail_magazine["date"]        = date( "Y-m-d H:i:s" );
	$mail_magazine["post_num"]    = $magazine["post_num"];
	$mail_magazine["post_flg"]    = 2;
	$mail_magazine["id_magazine"] = $magazine["id_magazine"];

	$res = $mainObject->update( $mail_magazine );

	// 失敗したらロールバック
	if( $res == false ) {
		$mainObject->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$mainObject->_DBconn->CompleteTrans();
	
	$message["ok"] .= "送信データを登録しました。";
	$message["ok"] .= "メルマガの送信を完了しました。";

}else{

	$message["ng"] .= "メルマガデータの取得に失敗しました。";
}

// クラス削除
unset( $objManage  );
unset( $mainObject );


//----------------------------------------
//  メッセージ
//----------------------------------------
if( empty( $message["ng"] ) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );
	exit;

} else {

	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= _CONTENTS_DIR;

	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );

	// 表示
	$smarty->display( "send.tpl" );

}
?>