<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
</head>
<body id="{$_DIR_NAME}">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="{$_FRONT.home}/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/">28 マイページ</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 class="hl_3 mincho">退会を行いました</h2>
				<p class="mb20">
					ご入力いただいたEメールアドレス{if !empty( $arr_post.mail )}({$arr_post.mail}){/if}宛に、確認メールをお送りしておりますのでご確認ください。
				</p>
				<p class="mb20">
					しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
					「ご入力いただいたメールアドレスが間違っている」<br>
					「迷惑メール対策による受信メールの自動削除設定」<br>
					「メールボックスの容量オーバー（特にフリーメール）」<br>
					「メールの受信制限や拒否設定（特に携帯メール）」
				</p>
				<p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
					送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。
				</p>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer mode=mypage}
</div>
</body>
</html>