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
					<h2 class="hl"><img src="{$_FRONT.home}/common/image/content/{$_DIR_NAME}/title.png" alt="会員情報編集" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="send.php" method="post">
									<div>
										{$arr_post.mail}
										<input type="hidden" name="mail" value="{$arr_post.mail}" />
									</div>
									<div>
										{if !empty($arr_post.password)}
											************
											<input type="hidden" name="password" value="{$arr_post.password}" />
										{/if}
									</div>
									<div>
										{$arr_post.name1} {$arr_post.name2}
										<input type="hidden" name="name1" value="{$arr_post.name1}" />
										<input type="hidden" name="name2" value="{$arr_post.name2}" />
									</div>
									<div>
										{$arr_post.ruby1} {$arr_post.ruby2}
										<input type="hidden" name="ruby1" value="{$arr_post.ruby1}" />
										<input type="hidden" name="ruby2" value="{$arr_post.ruby2}" />
									</div>
									<div>
										{$arr_post.tel|default:'未入力'}
										<input type="hidden" name="tel" value="{$arr_post.tel}" />
									</div>
									<div>
									</div>
									<div>
										{if !empty($arr_post.zip)}{$arr_post.zip}&nbsp;{/if}
										{html_select_ken selected=$arr_post.prefecture pre=1}<br />
										{$arr_post.address1}&nbsp;{$arr_post.address2}
										<input type="hidden" name="zip" value="{$arr_post.zip}" />
										<input type="hidden" name="prefecture" value="{$arr_post.prefecture}" />
										<input type="hidden" name="address1" value="{$arr_post.address1}" />
										<input type="hidden" name="address2" value="{$arr_post.address2}" />
									</div>
									<div>
										<input type="hidden" name="first_flg" value="{$arr_post.first_flg|default:0}" />
										<input type="submit" class="btn_1" onclick="this.form.action='./'" value="戻る" />
										<input type="submit" class="btn_1 mb10" value="保存" />
									</div>
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