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
					<h2 class="hl">会員登録確認</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								{if !empty($message.ng)}<p class="error">※{$message.ng.error}</p>{/if}
								<form action="send.php" method="post">
									<p>メールアドレス</p>
									<p>{$arr_post.mail}</p>
									<input type="hidden" id="mail" name="mail" value="{$arr_post.mail}" />
								{if !empty($arr_post.user)}
									<p>パスワード</p>
									<p>********</p>
									<input type="hidden" name="password" value="{$arr_post.password}" />
									<input type="hidden" name="chk_password" value="{$arr_post.chk_password}" />
									<input type="hidden" name="id" value="{$arr_post.id}" />
									<input type="hidden" name="user" value="{$arr_post.user}" />
								{/if}
									<p><input type="submit" class="btn_1" onclick="this.form.action='./'" value="戻る"></p>
									<p><input type="submit" class="btn_1 mb10" onclick="this.form.action='./send.php'" value="送信"></p>
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