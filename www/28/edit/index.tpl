<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
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
				{if !empty($message.succeed)}
					<div class="success" role="alert">{$message.succeed}</div>
				{elseif !empty($message.fail)}
					<div class="error" role="alert">{$message.fail}</div>
				{/if}
				<form class="mb30" action="check.php" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.mail)}<p class="error">※{$message.ng.mail}</p>{/if}
									<input type="text" id="mail" name="mail" value="{$arr_post.mail}" placeholder="Eメールアドレス" />
								</td>
							</tr>
							<tr>
								<th scope="row">パスワード</th>
								<td>
									<p>※空欄の場合は変更されません。</p>
									{if !empty($message.ng.password)}<p class="error">※{$message.ng.password}</p>{/if}
									<input type="password" id="password" name="password" value="" placeholder="パスワード" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.name1)}<p class="error">※{$message.ng.name1}</p>{/if}
									{if !empty($message.ng.name2)}<p class="error">※{$message.ng.name2}</p>{/if}
									<input type="text" id="name1" name="name1" value="{$arr_post.name1}" placeholder="お名前(姓)" />
									<input type="text" id="name2" name="name2" value="{$arr_post.name2}" placeholder="お名前(名)" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前フリガナ<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.ruby1)}<p class="error">※{$message.ng.ruby1}</p>{/if}
									{if !empty($message.ng.ruby2)}<p class="error">※{$message.ng.ruby2}</p>{/if}
									<input type="text" id="ruby1" name="ruby1" value="{$arr_post.ruby1}" placeholder="お名前フリガナ(姓)" />
									<input type="text" id="ruby2" name="ruby2" value="{$arr_post.ruby2}" placeholder="お名前フリガナ(名)" />
								</td>
							</tr>
							<tr>
								<th scope="row">電話番号</th>
								<td>
									{if !empty($message.ng.tel)}<p class="error">※{$message.ng.tel}</p>{/if}
									<input type="tel" id="tel" name="tel" value="{$arr_post.tel}" placeholder="電話番号" />
								</td>
							</tr>
							<tr>
								<th scope="row">郵便番号</th>
								<td>
									{if !empty($message.ng.zip)}<p class="error">※{$message.ng.zip}</p>{/if}
									<input type="text" id="zip" name="zip" value="{$arr_post.zip}" placeholder="000-0000" />
									<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block">
										<i class="fa fa-search" aria-hidden="true"></i>郵便番号から住所を自動入力する
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">都道府県</th>
								<td>
									{if !empty($message.ng.prefecture)}<p class="error">※{$message.ng.prefecture}</p>{/if}
									{html_select_ken name="prefecture" class="form-control inline input-s" selected=$arr_post.prefecture|default:"0"}
								</td>
							</tr>
							<tr class="last">
								<th scope="row">住所</th>
								<td>
									{if !empty($message.ng.address1)}<p class="error">※{$message.ng.address1}</p>{/if}
									<input type="text" id="address1" name="address1" value="{$arr_post.address1}" placeholder="市区町村" />
									{if !empty($message.ng.address2)}<p class="error">※{$message.ng.address2}</p>{/if}
									<input type="text" id="address2" name="address2" value="{$arr_post.address2}" placeholder="番地 / 建物・マンション名" />
								</td>
							</tr>
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
