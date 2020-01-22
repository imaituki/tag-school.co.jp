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
								<form action="check.php" method="post">
									{if empty($arr_post.user)}
										<p>メールアドレス</p>
										<p>
											※tag-school.co.jpからのメールを受け取れるよう設定をお願いいたします。<br />
											※メールアドレスを誤って登録された場合は受付ができませんのでご注意ください。
										</p>
										{if !empty($message.ng.mail)}<p class="error">※{$message.ng.mail}</p>{/if}
										<input type="text" id="mail" name="mail" value="{$arr_post.mail}" placeholder="メールアドレス" />
									{else}
										<p>メールアドレス</p>
										<p>{$arr_post.mail}</p>
										<input type="hidden" id="mail" name="mail" value="{$arr_post.mail}" placeholder="メールアドレス" />
										<p>パスワード</p>
										<p>パスワードは<span class="c_red">半角英数8文字以上32字以下</span>で入力してください。</p>
										{if !empty($message.ng.password)}<p class="error">※{$message.ng.password}</p>{/if}
										<input type="password" id="password" name="password" value="{$arr_post.password}" placeholder="パスワード" />
										<p>パスワード(確認用)</p>
										<input type="password" id="chk_password" name="chk_password" value="{$arr_post.password}" placeholder="パスワード" />
										<input type="hidden" name="user" value="{$arr_post.user}" />
									{/if}
										<p><input type="submit" class="btn_1 mb10" value="入力内容確認" onclick="this.form.action='./check.php'" /></p>
								</form>
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