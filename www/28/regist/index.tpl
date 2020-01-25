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
				{if !empty($message.ng)}<p class="error">※{$message.ng.error}</p>{/if}
				<form class="mb30" action="check.php" method="post">
					<table class="tbl_form bg0">
						<tbody>
							{if empty($arr_post.user)}
								<tr>
									<th scope="row">Eメールアドレス<span class="need">必須</span></th>
									<td>
										<p>
											※tag-school.co.jpからのメールを受け取れるよう設定をお願いいたします。<br />
											※メールアドレスを誤って送信された場合は受付ができませんのでご注意ください。
										</p>
										{if $message.ng.mail|default:'' != NULL}<p class="error">{$message.ng.mail}</p>{/if}
										<input type="email" id="mail" name="mail" value="{$arr_post.mail}" placeholder="Eメールアドレス" />
									</td>
								</tr>
							{else}
								<tr class="first">
									<th scope="row">Eメールアドレス<span class="need">必須</span></th>
									<td>
										{$member.mail}
										<input type="hidden" id="mail" name="mail" value="{$member.mail}" placeholder="Eメールアドレス" />
									</td>
								</tr>
								<tr>
									<th scope="row">パスワード<span class="need">必須</span></th>
									<td>
										{if $message.ng.mail|default:'' != NULL}<p class="error">{$message.ng.mail}</p>{/if}
										<input type="password" id="password" name="password" value="{$arr_post.password}" placeholder="パスワード" />
									</td>
								</tr>
								<tr class="last">
									<th scope="row">パスワード(確認用)<span class="need">必須</span></th>
									<td>
										<input type="hidden" name="id" value="{$member.id_member}" />
										<input type="hidden" name="user" value="{$arr_post.user}" />
										<input type="password" id="chk_password" name="chk_password" value="{$arr_post.chk_password}" placeholder="パスワード(確認用)" />
									</td>
								</tr>
							{/if}
						</tbody>
					</table>
					<div class="pos_ac form_button">
						<button class="button" type="submit">入力内容確認<i class="fa fa-chevron-right"></i></button>
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
