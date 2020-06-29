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
$tcpdf->SetXY( 50, 10 );
$tcpdf->fontAutoCell( $tcpdf, _W100, _H10 , "ファーストコンタクトカード", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE12 );
$tcpdf->Ln();
$tcpdf->Ln();

// 生徒氏名・性別
$tcpdf->fontAutoCell( $tcpdf, _W25, _H6,  "フリガナ",       1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H6 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W80, _H6,  $data["ruby1"], 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H6, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W25, _H6,  "(2)性別",      1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H6 , _FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W25, _H10, "(1)生徒氏名",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W80, _H10, $data["name1"], 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W25, _H10, "男 ・ 女",      1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10 , _FONT_SIZE10 );

// 右部分の番号記入欄
$tcpdf->SetXY( 160, 30 );
$tcpdf->Write( 8, "No.     ", "", false, "L" );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "2", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "0", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );
$tcpdf->fontAutoCell( $tcpdf, _W5, _H8, "",  1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE12 );

// 在籍学校名・学年
$tcpdf->SetXY( 10, 46 );
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
$tcpdf->SetXY( 10, 115 );
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
			$sonota = "(　　　　　　　　　　)";
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

$tcpdf->Write( 6, "ご回答ありがとうございました。", "", false, "R" );
$tcpdf->Write( 6, "◎ご記入いただいた個人情報は、TAG school運営に関する業務目的のみに使用するものとします。", "", false, "L" );
$tcpdf->Ln();

// 備考
$tcpdf->fontAutoCell( $tcpdf, _W160, _H28 , "備考", 1, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H35 , _FONT_SIZE12 );
$tcpdf->Ln();

$tcpdf->Write( 6, "□面談日時( 　　月　　日　　：　　～ )", "", false, "L" );

/*
// 決裁印・公印押印
$tcpdf->SetXY( 10, 10 );
$tcpdf->fontAutoCell( $tcpdf, _W45, _H8 , "決 裁 印", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W45, _H8 , "公印押印", 1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8 , _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W45, _H28, ""        , 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W45, _H28, ""        , 1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28, _FONT_SIZE10 );

// 起案・担当者
$tcpdf->SetXY( _W120, 15 );
$tcpdf->Write( 5 , "起　案：", "", false, "L" );
$tcpdf->SetXY( _W120, 23 );
$tcpdf->Write( 5 , "担当者：", "", false, "L" );
$tcpdf->SetXY( _W120, 31 );
$tcpdf->fontAutoCell( $tcpdf, _W40, _H16, "出前講座\n受付番号", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W40, _H16, $data["number"], 1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H16, _FONT_SIZE10 );


// 環境学習・主査・主任・係
$tcpdf->SetXY( 15, 55 );
$tcpdf->fontAutoCell( $tcpdf, _W30, _H10, "環境学習\nｾﾝﾀｰ所長", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W150, _H10, ""              , 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10, _FONT_SIZE10 );
//$tcpdf->fontAutoCell( $tcpdf, _W45, _H10, ""              , 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10, _FONT_SIZE10 );
//$tcpdf->fontAutoCell( $tcpdf, _W45, _H10, ""                , 1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H16, _FONT_SIZE10 );
$tcpdf->SetX( 15 );
$tcpdf->fontAutoCell( $tcpdf, _W30, _H28, "", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H24, _FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W150, _H28, "", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H24, _FONT_SIZE10 );
//$tcpdf->fontAutoCell( $tcpdf, _W45, _H24, "", 1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H24, _FONT_SIZE10 );
//$tcpdf->fontAutoCell( $tcpdf, _W45, _H24, "", 1, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H24, _FONT_SIZE10 );
$tcpdf->Ln();
$tcpdf->SetY( $tcpdf->GetY() + _H8 );
$tcpdf->Write( 5, "伺", "", false, "C" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Write( 5, "環境学習出前講座　講師派遣について", "", false, "C" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Write( 5, "このことについて、下記のとおり、実施してよろしいか。", "", false, "L" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Write( 5, "記", "", false, "C" );
$tcpdf->Ln();
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "１．団体名"          , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $data["name"]   , 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "２．実施プログラム"  , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $OptionTheme[$data["theme_program"]] . "に関すること", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H16, ""                    , 0    , 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H16, ""                    , 0    , 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $OptionMenu[$data["menu_program"]], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H16, ""                    , 0    , 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H16, ""                    , 0    , 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H16,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $data["comment_program"], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "３．実施場所"        , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $data["place"]                    , 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "（"                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W120, _H10, $data["place_address"] . $data["place_address2"]                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "）"                  , 0, 'C', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "４．実施日"          , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, date( "Y年m月d日", strtotime( $data["action_date"] ) ) . "（" . $OptionWeek[date( "w", strtotime( $data["action_date"] ) )] . "）  " . $data["action_time"], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

if( !empty($data["spare_date"]) || !empty($data["spare_time"]) ){
	$tcpdf->fontAutoCell( $tcpdf, _W50 , _H8, ""                    , 0    , 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 ,_FONT_SIZE10 );
	$tcpdf->fontAutoCell( $tcpdf, _W8  , _H8, ""                    , 0    , 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H8 ,_FONT_SIZE10 );
	$tcpdf->fontAutoCell( $tcpdf, _W130, _H8, "予備日時：". date( "Y年m月d日", strtotime($data["spare_date"]) ) . "（" . $OptionWeek[date( "w", strtotime($data["spare_date"]) )]. "）  ". $data["spare_time"], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );
}

// 講師、謝金、交通費まとめる
if( !empty( $data["lecturerlist"] ) && is_array( $data["lecturerlist"] ) ){
	foreach ( $data["lecturerlist"] as $key => $val ) {
		if( !empty( $val["group_name"] ) ){
			$group_name = "（" . $val["group_name"] . "）";
		} else {
			$group_name = "　　";
		}
		if( $val["id_lecturer"] != 0 && !empty( $val["id_lecturer"] ) ){
			$lecturerlist[]         = $OptionLecturer[$val["id_lecturer"]] . $group_name;
			$lectureraddress[]      = $val["address"];
			// 2019/11/05 下見をした場合は、移動距離および交通費が2倍になる
			if( $val["preview"] == 1 ){
				$val["traffic"]  = $val["traffic"] * 2;
				$val["distance"] = $val["distance"] * 2;
			}
			$lecturersalary[]       = " 支払月："  . date( "Y年m月", strtotime( $val["payment_month"] ) ) . " 謝金:" . $val["salary"] . " 交通費：" . $val["traffic"] . "円 （" . $val["distance"] . "×25円/km）";
			$lecturersalarydetail[] = $val["salary_detail"];
		}
	}
}

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "５．講師"            , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
if( is_array( $lecturerlist ) && !empty( $lecturerlist ) ){
	foreach ( $lecturerlist as $key => $val ) {
		if( $key != 0 ){
			$tcpdf->fontAutoCell( $tcpdf, _W50 , 1, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
			$tcpdf->fontAutoCell( $tcpdf, _W8  , 1, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		}
	
		$tcpdf->fontAutoCell( $tcpdf, _W130, 1, $val, 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );

		$tcpdf->fontAutoCell( $tcpdf, _W50 , 1, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W8  , 1, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W130, 1, $lectureraddress[$key], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W50 , 1, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W8  , 1, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W130, 1, $lecturersalary[$key], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W50 , 1, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W8  , 1, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W130, 1, $lecturersalarydetail[$key], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
	}
}else{
	$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, "", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
}


$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "６．講師謝金"        , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
foreach ( $data["lecturerlist"] as $key => $val ) {
	if( $key != 0 ){
		$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
	}
	$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $val["salary"]        , 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
}

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "７．交通費"          , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
foreach ( $data["lecturerlist"] as $key => $val ) {
	if( $key != 0 ){
		$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, ""                    , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
		$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, ""                    , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
	} 
	$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, $val["traffic"] . "円 （" . $val["distance"] . "×25円/km）", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
}
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H10, "６．移動環境学習車"  , 0, 'L', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W8  , _H10, "："                  , 0, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H10, ( $data["set_flg"] == 1 ) ? "有り" : "無し", 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H10,_FONT_SIZE10 );
$tcpdf->Write( 5, "以上", "", false, "R" );


//----------------------------------------
//  ２ページ目出力
//----------------------------------------
if( !empty( $data["lecturerlist"] ) && is_array( $data["lecturerlist"] ) ){
	foreach ( $data["lecturerlist"] as $key => $val ) {
		$lecturer[$key]         = $OptionLecturer[$val["id_lecturer"]];
		if( !empty( $val["group_name"] ) ){
			$lecturer[$key] .= "（" . $val["group_name"] . "）";
		}
		if( !empty( $val["lecturer_contact"] ) ){
			$lecturer_contact[$key] = $val["lecturer_contact"];
		}
	}
}

// 参加人数
$adult    = ( $data["adlut"] != NULL ) ? "大人　" . $data["adlut"] . "名" : "";
$children = ( $data["children"] != NULL ) ? "小人　" . $data["children"] . "　名" : "";
// $school   = ( $data["school"] != NULL ) ? "※" . $data["school"] . "" : ""; // 2020/05/12 非表示

// ページ追加
$tcpdf->AddPage( 'P', 'A4' );

// ページの余白
$tcpdf->SetMargins( 10, 10, 10, true );

// 出力
$tcpdf->SetXY( 10, 10 );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->fontAutoCell( $tcpdf, _W120, _H8, $data["name"], 0, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W80, _H8, $data["representative"] . " 殿"       , 0, 'R', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );
$tcpdf->Ln();
$tcpdf->Write( 5, "岡山県環境学習協働推進広場事務局", "", false, "R" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Write( 5, "「協働による環境学習出前講座」実施承認書", "", false, "C" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Write( 5, "下記のとおり承認します。", "", false, "L" );
$tcpdf->Ln();
$tcpdf->Ln();
$tcpdf->Ln();
$borderStyle1 = array( 'RB' => array( 'dash' => '2' ), 'TL' => array( 'dash' => 0 ) );
$borderStyle2 = array( 'B'  => array( 'dash' => '2' ), 'TR' => array( 'dash' => 0 ) );
$borderStyle3 = array( 'RB' => array( 'dash' => '2' ), 'L'  => array( 'dash' => 0 ) );
$borderStyle4 = array( 'B'  => array( 'dash' => '2' ), 'R'  => array( 'dash' => 0 ) );
$borderStyle5 = array( 'R'  => array( 'dash' => '2' ), 'BL' => array( 'dash' => 0 ) );
$borderStyle6 = array( 'BR' => array( 'dash' => 0 ) );
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "実施日時"                    , $borderStyle1, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, date( "Y年m月d日", strtotime( $data["action_date"] ) ) . "（" . $OptionWeek[date( "w", strtotime( $data["action_date"] ) )] . "）" . $data["action_time"], $borderStyle2, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "実施場所"                    , $borderStyle3, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, $data["place"] . "\n（　" . $data["place_address"] . $data["place_address2"] . "　）", $borderStyle4, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "参加対象者"                  , $borderStyle3, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, $adult . " " . $children . "\n" . $school, $borderStyle4, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "実施プログラム"              , $borderStyle3, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, "「" . $OptionTheme[$data["theme_program"]] . "」に関すること\n" . $OptionMenu[$data["menu_program"]] . "\n" . $data["comment_program"], $borderStyle4, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "講　師"                      , $borderStyle3, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, implode( "\n", $lecturer ) . "\n" . implode( "\n", $lecturer_contact ) , $borderStyle4, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10, "M", 0 );

$tcpdf->fontAutoCell( $tcpdf, _W50 , _H28, "移動環境学習車の\n利用の有無", $borderStyle5, 'C', 0, 0, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->fontAutoCell( $tcpdf, _W130, _H28, ( $data["set_flg"] == 1 ) ? "■有り　　　　　　　□無し" : "□有り　　　　　　　■無し"                            , $borderStyle6, 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H28,_FONT_SIZE10 );
$tcpdf->SetY( $tcpdf->GetY() + _H8 );
$tcpdf->fontAutoCell( $tcpdf, _W115, _H8, "※ご担当の方は、講師と当日の進行や準備物など詳細を調整下さい。", "B", 'L', 0, 1, NULL, NULL, NULL, NULL, NULL, true, _H8,_FONT_SIZE10 );
*/

// PDF出力
$tcpdf->Output( date('Ymd') . '.pdf', 'I' );
?>