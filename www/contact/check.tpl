<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="contact">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/contact/top.jpg" alt="{$_HTML_HEADER.title}" /></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">{$_HTML_HEADER.title}</span><span class="sub">Contact</span></h2>
			</div>
		</div>
	</div>
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
			<div id="form" class="center">
				<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">お問い合わせ項目</th>
								<td>
									{$OptionContent[$arr_post.content]}
									<input type="hidden" name="content" value="{$arr_post.content}" />
								</td>
							</tr>
							<tr>
								<th>生徒氏名</th>
								<td>
									{$arr_post.name1|default:''}
									<input type="hidden" name="name1" value="{$arr_post.name1|default:''}" />
								</td>
							</tr>
							<tr>
								<th>生徒氏名(フリガナ)</th>
								<td>
									{$arr_post.ruby1|default:''}
									<input type="hidden" name="ruby1" value="{$arr_post.ruby1|default:''}" />
								</td>
							</tr>
							<tr>
								<th>学年</th>
								<td>
									{$OptionGrade[$arr_post.grade]}
									<input type="hidden" name="grade" value="{$arr_post.grade}" />
								</td>
							</tr>
							<tr>
								<th scope="row">希望項目</th>
								<td>
									{$OptionRequest[$arr_post.request]}
									<input type="hidden" name="request" value="{$arr_post.request}" />
								</td>
							</tr>
							<tr>
								<th>入塾希望理由</th>
								<td>
									{$arr_post.reason|nl2br|default:'--'}
									<input type="hidden" name="reason" value="{$arr_post.reason|default:''}" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名</th>
								<td>
									{$arr_post.name2|default:'--'}
									<input type="hidden" name="name2" value="{$arr_post.name2|default:''}" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名(フリガナ)</th>
								<td>
									{$arr_post.ruby2|default:'--'}
									<input type="hidden" name="ruby2" value="{$arr_post.ruby2|default:''}" />
								</td>
							</tr>
							<tr>
								<th>Eメールアドレス</th>
								<td>
									{$arr_post.mail|default:''}
									<input type="hidden" name="mail" value="{$arr_post.mail|default:''}" />
								</td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td>
									{$arr_post.tel|default:''}
									<input type="hidden" name="tel" value="{$arr_post.tel|default:''}" />
								</td>
							</tr>
							<tr>
								<th class="pos-vt">住所</th>
								<td>
									{if $arr_post.zip != NULL ||  $arr_post.prefecture != 0 || $arr_post.address != NULL }
										{if $arr_post.zip}〒{$arr_post.zip}<br>{/if}
										{if $arr_post.prefecture != 0}{html_select_ken selected=$arr_post.prefecture|default:"--" pre=1}{/if} {if $arr_post.address}{$arr_post.address}{/if}
									{else}
									--
									{/if}
								<input type="hidden" name="zip" value="{$arr_post.zip}">
								<input type="hidden" name="prefecture" value="{$arr_post.prefecture}">
								<input type="hidden" name="address" value="{$arr_post.address}">
								</td>
							</tr>
							<tr class="last">
								<th>備考</th>
								<td>
									{$arr_post.comment|nl2br|default:'--'}
									<input type="hidden" name="comment" value="{$arr_post.comment|default:''}" />
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
{include file=$template_footer}
</div>
</body>
</html>
