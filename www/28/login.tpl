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
					<h2 class="hl">マイページ</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div class="wrap">
									<div class="box2">
										<div class="box2_contents">
											{if !empty($message.ng)}<p class="error">※{$message.ng.error}</p>{/if}
											<form action="./login.php{if $arr_get.mode != NULL}?mode={$arr_get.mode}{/if}" method="post">
												<div id="msg" class="pos_ac c_red"></div>
												<p>メールアドレス</p>
												<input type="text" id="mail" name="mail" value="" placeholder="メールアドレス" />
												<p>パスワード</p>
												<input type="password" id="password" name="password" value="" placeholder="パスワード" />
												<p><input type="submit" name="login" class="btn_1 mb10" value="ログイン"></p>
												<p class="pos-ac"><a href="/{$_DIR_NAME}/reissue/">パスワードを忘れた方</a></p>
											</form>
											<p>
												※ログインできないときは<br />
												・メールアドレスまたはパスワードが間違っている<br />
												・仮パスワードの有効期限(発行から24時間)が切れている
											</p>
										</div>
									</div>
									<p class="mt-40">
										<a  class="btn_2" href="{$_FRONT.home}/{$_DIR_NAME}/regist/">新規会員登録はこちら</a>
									</p>
								</div>
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