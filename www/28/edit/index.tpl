<!DOCTYPE html>
<html lang="ja">
	<head>
		{include file=$template_meta}
		<link rel="stylesheet" href="{$_FRONT.home}/common/css/import.css" type="text/css" />
		<link rel="shortcut icon" href="{$_FRONT.home}/common/favicon/favicon.ico" />
		<link rel="apple-touch-icon" href="{$_FRONT.home}/common/favicon/apple-touch-icon.png" />
		{include file=$template_javascript}
		<script type="text/javascript" charset="UTF-8" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
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
							{if !empty($message.succeed)}
								<div id="succeed">{$message.succeed}</div>
							{elseif !empty($message.fail)}
								<div id="fail">{$message.fail}</div>
							{/if}
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<div>
										<p>メールアドレス</p>
										{if !empty($message.ng.mail)}<p class="error">※{$message.ng.mail}</p>{/if}
										<input type="text" id="mail" name="mail" value="{$arr_post.mail}" placeholder="メールアドレス" />
									</div>
									<div>
										<p>パスワード(空欄の場合は変更なし)</p>
										<p class="error">※注: 確認画面から入力画面に戻った場合、入力したパスワードは保持されませんのでご注意ください。</p>
										{if !empty($message.ng.password)}<p class="error">※{$message.ng.password}</p>{/if}
										<input type="password" id="password" name="password" value="" placeholder="パスワード" />
									</div>
									<div>
										<p>お名前</p>
										{if !empty($message.ng.name1)}<p class="error">※{$message.ng.name1}</p>{/if}
										{if !empty($message.ng.name2)}<p class="error">※{$message.ng.name2}</p>{/if}
										<input type="text" id="name1" name="name1" value="{$arr_post.name1}" placeholder="お名前(姓)" />
										<input type="text" id="name2" name="name2" value="{$arr_post.name2}" placeholder="お名前(名)" />
									</div>
									<div>
										<p>フリガナ</p>
										{if !empty($message.ng.ruby1)}<p class="error">※{$message.ng.ruby1}</p>{/if}
										{if !empty($message.ng.ruby2)}<p class="error">※{$message.ng.ruby2}</p>{/if}
										<input type="text" id="ruby1" name="ruby1" value="{$arr_post.ruby1}" placeholder="フリガナ(姓)" />
										<input type="text" id="ruby2" name="ruby2" value="{$arr_post.ruby2}" placeholder="フリガナ(名)" />
									</div>
									<div>
										<p>電話番号</p>
										{if !empty($message.ng.tel)}<p class="error">※{$message.ng.tel}</p>{/if}
										<input type="text" id="tel" name="tel" value="{$arr_post.tel}" placeholder="電話番号" />
									</div>
									<div>
										<p>郵便番号</p>
										{if !empty($message.ng.zip)}<p class="error">※{$message.ng.zip}</p>{/if}
										<input type="text" id="zip" name="zip" value="{$arr_post.zip}" placeholder="郵便番号" />
										<button type="button" onclick="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から住所を自動入力する</button>
									</div>
									<div>
										<p>都道府県</p>
										{if !empty($message.ng.prefecture)}<p class="error">※{$message.ng.prefecture}</p>{/if}
										<select name="prefecture" >
											{html_select_ken selected=$arr_post.prefecture|default:""}
										</select>
									</div>
									<div>
										<p>住所</p>
										{if !empty($message.ng.address1)}<p class="error">※{$message.ng.address1}</p>{/if}
										<input type="text" id="address1" name="address1" value="{$arr_post.address1}" placeholder="市区町村" />
										{if !empty($message.ng.address2)}<p class="error">※{$message.ng.address2}</p>{/if}
										<input type="text" id="address2" name="address2" value="{$arr_post.address2}" placeholder="番地 / 建物・マンション名" />
									</div>
									<div>
										<input type="hidden" name="first_flg" value="{$arr_post.first_flg|default:0}" />
										<input type="submit" class="btn_1 mb10" value="入力内容確認" />
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