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