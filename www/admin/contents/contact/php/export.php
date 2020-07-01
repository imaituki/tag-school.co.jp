<?php
//-------------------------------------------------------------------
// 作成日: 2020/06/25
// 作成者: yamada
// 内  容: ファーストコンタクトカード
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require_once "./config.ini";


//----------------------------------------
// データ取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$objContact = new AD_contact( $objManage );

// データ取得
$data = $objContact->GetIdRow( $arr_get["id"] );

// クラス削除
unset( $objManage  );
unset( $objContact );


// データ調整
if( !empty( $data ) ){
	if( !empty($data["kikkake"]) ){
		$data["kikkake"] = explode( ",", $data["kikkake"] );
	}
}


//----------------------------------------
//  PDF出力クラス
//----------------------------------------
require $_SERVER["DOCUMENT_ROOT"] . "/../cgi-data/lib/tcpdf/config/lang/jpn.php";
require $_SERVER["DOCUMENT_ROOT"] . "/../cgi-data/lib/tcpdf/tcpdf.php";
require $_SERVER["DOCUMENT_ROOT"] . "/../cgi-data/lib/tcpdf/MyTcpdf.class.php";


//----------------------------------------
//  クラス
//----------------------------------------
// Smarty（住所出力用）
$smarty = new MySmarty("admin");
include_once _DOCUMENT_ROOT . "/../cgi-data/smarty/libs/plugins/function.html_select_ken.php";


//----------------------------------------
//  出力設定
//----------------------------------------
// テーブル幅
define( "_FONT_SIZE8" ,  8 );
define( "_FONT_SIZE9" ,  9 );
define( "_FONT_SIZE10", 10 );
define( "_FONT_SIZE11", 11 );
define( "_FONT_SIZE12", 12 );
define( "_FONT_SIZE13", 13 );
define( "_FONT_SIZE14", 14 );
define( "_FONT_SIZE15", 15 );
define( "_FONT_SIZE16", 16 );
define( "_FONT_SIZE17", 17 );
define( "_FONT_SIZE18", 18 );
define( "_WMAX", 190 );
define( "_W5"  ,  5  );
define( "_W8"  ,  8  );
define( "_W10" , 10  );
define( "_W20" , 20  );
define( "_W25" , 25  );
define( "_W30" , 30  );
define( "_W40" , 40  );
define( "_W45" , 45  );
define( "_W50" , 50  );
define( "_W55" , 55  );
define( "_W60" , 60  );
define( "_W80" , 80  );
define( "_W90" , 90  );
define( "_W100", 100 );
define( "_W110", 110 );
define( "_W120", 120 );
define( "_W130", 130 );
define( "_W150", 150 );
define( "_W160", 160 );
define( "_W170", 170 );
define( "_W180", 180 );
define( "_H6"  ,  6  );
define( "_H8"  ,  8  );
define( "_H10" , 10  );
define( "_H12" , 12  );
define( "_H14" , 14  );
define( "_H16" , 16  );
define( "_H20" , 20  );
define( "_H24" , 24  );
define( "_H28" , 28  );
define( "_H35" , 35  );

$ken = array(
	0 => $str_default,
	'北海道', '青森県',  '岩手県',  '宮城県',  '秋田県',  '山形県',
	'福島県', '茨城県',  '栃木県',  '群馬県',  '埼玉県',  '千葉県',
	'東京都', '神奈川県','新潟県',  '富山県',  '石川県',  '福井県',
	'山梨県', '長野県',  '岐阜県',  '静岡県',  '愛知県',  '三重県',
	'滋賀県', '京都府',  '大阪府',  '兵庫県',  '奈良県',  '和歌山県',
	'鳥取県', '島根県',  '岡山県',  '広島県',  '山口県',  '徳島県',
	'香川県', '愛媛県',  '高知県',  '福岡県',  '佐賀県',  '長崎県',
	'熊本県', '大分県',  '宮崎県',  '鹿児島県','沖縄県'
);


//----------------------------------------
//  PDF出力
//----------------------------------------
define( "_BORDER", 1 );

// PDFオブジェクト
$tcpdf = new MyTCPDF( PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false );

// ページ追加
$tcpdf->AddPage( 'P', 'A4' );

// 自動改ページモード
$tcpdf->SetAutoPageBreak( true );

// フォントサイズ
$tcpdf->SetFontSize( 10 );

// ページの余白
$tcpdf->SetMargins( 10, 10, 10, true );


//----------------------------------------
//  1ページ目出力
//----------------------------------------
$tcpdf->SetXY( 10, 5 );
$tcpdf->fontAutoCell( $tcpdf, _W100, _H10 , "ファーストコンタクトカード", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE12 );

// 面談日時
$tcpdf->SetXY( 130, 7 );
$tcpdf->SetFontSize( _FONT_SIZE10 );
$tcpdf->Write( 6, "面談日時( 　　月　　日　　：　　～ )", "", false, "L" );

$tcpdf->SetXY( 10, 15 );
$tcpdf->Write( 6, "◎ご記入いただいた個人情報は、TAG school運営に関する業務目的のみに使用するものとします。", "", false, "L" );

// 生徒氏名・性別
$tcpdf->SetXY( 10, 25 );
$tcpdf->fontAutoCell( $tcpdf, _W25, _H6,  "フリガナ",       1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H6 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W80, _H6,  $data["ruby1"], 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H6, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W25, _H6,  "(2)性別",      1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6 , _FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W25, _H10, "(1)生徒氏名",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W80, _H10, $data["name1"], 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W25, _H10, "男 ・ 女",      1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );

// 右部分の番号記入欄
$tcpdf->SetXY( 160, 25 );
$tcpdf->Write( 8, "No.     ", "", false, "L" );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "2", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "0", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );

// 在籍学校名・学年
$tcpdf->SetXY( 10, 41 );
$tcpdf->fontAutoCell( $tcpdf, _W25,  _H16, "(3)在籍学校名",                             1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W100, _H16, "□公立\n□私立\n□国立",                       1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W20,  _H16, "(4)学年",                                   1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W40,  _H16, "(現 ・ 新)\n". $OptionGrade[$data["grade"]], 1, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );

// 住所
$tcpdf->fontAutoCell( $tcpdf, _W25,  _H16, "(5)住所",                                                             1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H16, "〒". $data["zip"]. "\n". $ken[$data["prefecture"]]. $data["address"], 1, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H16 , _FONT_SIZE10 );

// 連絡先
$tcpdf->fontAutoCell( $tcpdf, _W25,  _H14, "(6)連絡先",                                                       1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H14 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H14, "□自宅  □携帯  所有者【　　　　　　　　　　】\n". $data["tel"], 1, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H14 , _FONT_SIZE10 );

// 保護者メールアドレス
$tcpdf->fontAutoCell( $tcpdf, _W25,  _H20, "(7)保護者\nﾒｰﾙｱﾄﾞﾚｽ",                                                                   1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H20 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H20, "\n\n ※0(ゼロ)とo(オー)や、-(ハイフン)と_(アンダーバー)などの混同しやすい文字についてはフリガナをお願いします。", 1, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H20 , _FONT_SIZE8 );

// Q1
$tcpdf->SetXY( 10, 110 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q1 今回ご来校された目的をお選びください。",          0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50,  _H6, "1. 塾に通い始めたい",                          0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W110, _H6, "2. 他塾からの転塾を考えている【塾名:　　　　　　　　　　　】", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50,  _H8, "3. 話だけ聞きたい",                            0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W100, _H8, "4. その他(　　　　　　　　　　)", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );

// Q2
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q2 ご希望の指導形態を教えてください。",  0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50,  _H8, $OptionRequest[$data["request"]], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );

// Q3
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q3 当校を知ったきっかけをお選びください。",  0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
if( !empty($data["kikkake"]) ){
	foreach( $data["kikkake"] as $key => $val ){
		if( $key % 3 == 2 ){
			$position = 1;
		}else{
			$position = 0;
		}
		if( $val == 5 && !empty($data["kikkake_5"]) ){
			$sonota = "(". $data["kikkake_5"]. ")";
		}elseif( $val == 6 && !empty($data["kikkake_6"]) ){
			$sonota = "(". $data["kikkake_6"]. ")";
		}
		$tcpdf->fontAutoCell( $tcpdf, _W60,  _H6, "・". $OptionKikkake[$val]. $sonota, 0, 'L', 0, $position, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
	}
}else{
	foreach( $OptionKikkake as $key => $val ){
		if( $key % 3 == 2 ){
			$position = 1;
		}else{
			$position = 0;
		}
		if( $key == 5 || $key == 6 ){
			$sonota = "(　　　　　　)";
		}
		$tcpdf->fontAutoCell( $tcpdf, _W60,  _H6, "・". $val. $sonota, 0, 'L', 0, $position, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
	}
}
$tcpdf->Ln();

// Q4
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q4 ご兄弟姉妹がおられる場合にはご記入ください。", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "学校名(　　　　　　　　　　　　) 小 ・ 中 ・ 高　新　　年　お名前(　　　　　　　　　) 男 ・ 女", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H8, "学校名(　　　　　　　　　　　　) 小 ・ 中 ・ 高　新　　年　お名前(　　　　　　　　　) 男 ・ 女", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );

// Q5
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q5 得意教科、苦手教科を教えてください。　※複数回答可", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "・得意教科(　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　)", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H8, "・苦手教科(　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　)", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );

// Q6
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q6 受験を考えておられる方は、現時点の志望校を教えてください。　※複数回答可", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H8, "・志望校(　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　)", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );

// Q7
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "Q7 習い事、または部活動を教えてください。", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "・習い事(　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　)", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W160, _H6, "・部活動(　　　　　　　　　　　　　　　　　　　　　　)部　※中学生のみ", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6,_FONT_SIZE10 );
$tcpdf->Ln();

$tcpdf->Write( 6, "ご回答ありがとうございました。", "", false, "R" );
$tcpdf->Ln();

// 備考
$tcpdf->fontAutoCell( $tcpdf, _W180, _H28 , "", 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28 , _FONT_SIZE10 );

// PDF出力
$tcpdf->Output( date('YmdHis') . '.pdf', 'I' );
?>