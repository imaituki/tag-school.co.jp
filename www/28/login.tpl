<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
</head>
<body id="contact">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 id="form" class="hl_3 mincho">{$_HTML_HEADER.title}</h2>
				{if !empty($message.ng)}<p class="error">※{$message.ng.error}</p>{/if}
				<form class="mb30" action="./login.php{if $arr_get.mode != NULL}?mode={$arr_get.mode}{/if}" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス<span class="need">必須</span></th>
								<td>
									{if $message.ng.mail|default:'' != NULL}<p class="error">{$message.ng.mail}</p>{/if}
									<input type="email" id="mail" name="mail" value="" placeholder="Eメールアドレス" />
								</td>
							</tr>
							<tr>
								<th scope="row">パスワード<span class="need">必須</span></th>
								<td>
									{if $message.ng.password|default:'' != NULL}<p class="error">{$message.ng.password}</p>{/if}
									<input type="password" id="password" class="mb10" name="password" value="" placeholder="パスワード" />
									<p class="pos-ac"><a href="/{$_DIR_NAME}/reissue/">パスワードを忘れた方はこちら</a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="pos_ac form_button">
						<button class="button" type="submit">ログイン<i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
				<div class="pos_ac">
					<a  class="btn_2" href="{$_FRONT.home}/{$_DIR_NAME}/regist/">新規会員登録はこちら</a>
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