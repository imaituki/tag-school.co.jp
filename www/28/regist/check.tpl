<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
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
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/login.php">28 ログイン</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 id="form" class="hl_3 mincho">{$_HTML_HEADER.title}</h2>
				<p class="mb10 c_red">送信するメールアドレスが正しいかご確認ください。</p>
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				{if !empty($message.ng)}<p class="error">※{$message.ng.error}</p>{/if}
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr>
								<th scope="row">Eメールアドレス</th>
								<td>
									{$arr_post.mail}
									<input type="hidden" name="mail" value="{$arr_post.mail}" />
								</td>
							</tr>
						{if !empty($arr_post.user)}
							<tr>
								<th scope="row">パスワード</th>
								<td>
									**********
									<input type="hidden" name="password" value="{$arr_post.password}" />
									<input type="hidden" name="chk_password" value="{$arr_post.chk_password}" />
									<input type="hidden" name="id" value="{$arr_post.id}" />
									<input type="hidden" name="user" value="{$arr_post.user}" />
								</td>
							</tr>
							<tr class="last">
								<th scope="row">メールマガジンの送信を希望する</th>
								<td>
									{$OptionYesNo[$arr_post.mail_magazine_flg|default:'0']}
									<input type="hidden" name="mail_magazine_flg" value="{$arr_post.mail_magazine_flg}" />
								</td>
							</tr>
						{/if}
						</tbody>
					</table>
					<div class="row form_button">
						<div class="col-xs-6 mb20 pos_al">
							<button class="button _back" type="submit"><i class="fa fa-chevron-left"></i>修正する</button>
						</div>
						<div class="col-xs-6 pos_ar">
							<button id="send_button" class="button" type="submit">送信する<i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
