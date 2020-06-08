<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="online-consultation">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/privacy/top.jpg" alt="LINEオンライン面談予約"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">LINEオンライン面談予約</span><span class="sub">Online-consultation</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>LINEオンライン面談予約</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				<h2 class="hl_3 mincho">LINEオンライン面談予約を完了しました</h2>
				<p class="mb20">ご入力いただいたメールアドレス{if !empty( $arr_post.mail )}({$arr_post.mail}){/if}宛に、確認メールをお送りしておりますのでご確認ください。</p>
				<p class="mb20">
					しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
					「ご入力いただいたメールアドレスが間違っている」<br>
					「迷惑メール対策による受信メールの自動削除設定」<br>
					「メールボックスの容量オーバー（特にフリーメール）」<br>
					「メールの受信制限や拒否設定（特に携帯メール）」</p>
				<p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
					送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。</p>
				<p class="mb50">その他、何かご不明な点等ございましたら、お気軽にお問い合わせください。</p>
				<div class="pos_ac">
					<a href="/" class="button _type1"><i class="fa fa-chevron-right"></i>トップページに戻る</a>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
