<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
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
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/login.php">28 ログイン</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				{if !empty($arr_post.temp_var)}
					<h2 class="hl_3 mincho">会員仮登録を受付けました</h2>
					<p class="mb30">
						My Page会員に仮登録いただき、ありがとうございます。<br />
						まだ登録は完了しておりません。<br />
						{$arr_post.mail}宛てに自動送信メールをお送りしました。<br />
						本登録用のURLをお送りいたしましたので、そちらから本登録を完了してください。
					</p>
					<p class="mb20">
						しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
						「ご入力いただいたメールアドレスが間違っている」<br>
						「迷惑メール対策による受信メールの自動削除設定」<br>
						「メールボックスの容量オーバー（特にフリーメール）」<br>
						「メールの受信制限や拒否設定（特に携帯メール）」
					</p>
					<p class="mb20">
						メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
						送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。
					</p>
				{else}
					<h2 class="hl_3 mincho">会員本登録を行いました</h2>
					<p class="mb10">
						My Page会員に本登録いただき、ありがとうございます。<br />
						ご登録いただいたメールアドレスとパスワードで、マイページにログインしてください。
					</p>
					<div class="pos_ac">
						<a href="{$_FRONT.home}/{$_DIR_NAME}/login.php" class="button _type1"><i class="fa fa-chevron-right"></i>ログイン画面に戻る</a>
					</div>
				{/if}
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>




<!DOCTYPE html>
<html lang="ja">
	<head>
		{include file=$template_meta}
		<link rel="stylesheet" href="{$_FRONT.home}/common/css/import.css" type="text/css" />
		<link rel="shortcut icon" href="{$_FRONT.home}/common/favicon/favicon.ico" />
		<link rel="apple-touch-icon" href="{$_FRONT.home}/common/favicon/apple-touch-icon.png" />
		{include file=$template_javascript}
	</head>
	<body id="{$_DIR_NAME}" class="bottom">
		<a id="pagetop" name="pagetop"></a>
		<div id="base">
			{include file=$template_header}
			<section class="style--page_title">
			<div class="container">
				<div class="back">
					<h2 class="hl">{$_HTML_HEADER.title}</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								{if !empty($arr_post.temp_var)}
									<p>仮登録を行いました。</p>
									<p>
										My Page会員に仮登録いただき、ありがとうございます。<br />
										まだ登録は完了しておりません。<br />
										{$arr_post.mail}宛てに自動送信メールをお送りしました。<br />
										本登録用のURLをお送りいたしましたので、そちらから本登録を完了してください。
									</p>
								{else}
									<p>本登録を行いました。</p>
									<p>
										My Page会員に本登録いただき、ありがとうございます。<br />
										ご登録いただいたメールアドレスとパスワードで、マイページにログインしてください。
									</p>
									<p><a href="{$_FRONT.home}/{$_DIR_NAME}/login.php">マイページ ログイン</a></p>
								{/if}
							</section>
						</div>
					</div>
				</main>
			</div><!-- #body -->
			{include file=$template_footer}
		</div><!-- #base -->
		<!-- JavaScript -->
		<script type="text/javascript" src="{$_FRONT.home}/common/js/import.js"></script>
	</body>
</html>
