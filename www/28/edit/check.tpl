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
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/">28 マイページ</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 id="form" class="hl_3 mincho">{$_HTML_HEADER.title}</h2>
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス</th>
								<td>
									{$arr_post.mail}
									<input type="hidden" name="mail" value="{$arr_post.mail}" />
								</td>
							</tr>
							<tr>
								<th scope="row">パスワード</th>
								<td>
									{if !empty($arr_post.password)}
										<span class="c_red">前の画面に戻った場合、パスワードの入力はリセットされます。</span><br />
										ご入力いただいたパスワード
										<input type="hidden" name="password" value="{$arr_post.password}" />
									{else}
										変更なし
									{/if}
								</td>
							</tr>
							<tr>
								<th scope="row">お名前</th>
								<td>
									{$arr_post.name1} {$arr_post.name2}
									<input type="hidden" name="name1" value="{$arr_post.name1}" />
									<input type="hidden" name="name2" value="{$arr_post.name2}" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前フリガナ</th>
								<td>
									{$arr_post.ruby1} {$arr_post.ruby2}
									<input type="hidden" name="ruby1" value="{$arr_post.ruby1}" />
									<input type="hidden" name="ruby2" value="{$arr_post.ruby2}" />
								</td>
							</tr>
							<tr>
								<th scope="row">電話番号</th>
								<td>
									{$arr_post.tel|default:'未入力'}
									<input type="hidden" name="tel" value="{$arr_post.tel}" />
								</td>
							</tr>
							<tr>
								<th scope="row">住所</th>
								<td>
									{if !empty($arr_post.zip)}{$arr_post.zip}&nbsp;{/if}
									{if $arr_post.prefecture == 0}--{else}{html_select_ken selected=$arr_post.prefecture pre=1}{/if}<br />
									{$arr_post.address1}&nbsp;{$arr_post.address2}
									<input type="hidden" name="zip" value="{$arr_post.zip}" />
									<input type="hidden" name="prefecture" value="{$arr_post.prefecture}" />
									<input type="hidden" name="address1" value="{$arr_post.address1}" />
									<input type="hidden" name="address2" value="{$arr_post.address2}" />
								</td>
							</tr>
							<tr class="last">
								<th scope="row">メールマガジンの送信を希望する</th>
								<td>
									{$OptionYesNo[$arr_post.mail_magazine_flg|default:'0']}
									<input type="hidden" name="mail_magazine_flg" value="{$arr_post.mail_magazine_flg}" />
								</td>
							</tr>
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
{include file=$template_footer mode=mypage}
</div>
</body>
</html>
