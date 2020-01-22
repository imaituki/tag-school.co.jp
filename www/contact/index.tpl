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
					<h2 class="hl">{$_HTML_HEADER.title}</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<table>
										<tr>
											<th>生徒氏名</th>
											<td>
												{if !empty($message.ng.name1)}<span class="c_red">※{$message.ng.name1}</span>{/if}
												<input type="text" name="name1" value="{$arr_post.name1|default:''}" />
											</td>
										</tr>
										<tr>
											<th>生徒氏名(フリガナ)</th>
											<td>
												{if !empty($message.ng.ruby1)}<span class="c_red">※{$message.ng.ruby1}</span>{/if}
												<input type="text" name="ruby1" value="{$arr_post.ruby1|default:''}" />
											</td>
										</tr>
										<tr>
											<th>学年</th>
											<td>
												{if !empty($message.ng.grade)}<span class="c_red">※{$message.ng.grade}</span>{/if}
												<select name="grade">
													<option value="">選択してください。</option>
													{html_options options=$OptionGrade selected=$arr_post.grade}
												</select>
											</td>
										</tr>
										<tr>
											<th>保護者氏名</th>
											<td>
												{if !empty($message.ng.name2)}<span class="c_red">※{$message.ng.name2}</span>{/if}
												<input type="text" name="name2" value="{$arr_post.name2|default:''}" />
											</td>
										</tr>
										<tr>
											<th>保護者氏名(フリガナ)</th>
											<td>
												{if !empty($message.ng.ruby2)}<span class="c_red">※{$message.ng.ruby2}</span>{/if}
												<input type="text" name="ruby2" value="{$arr_post.ruby2|default:''}" />
											</td>
										</tr>
										<tr>
											<th>入塾希望理由</th>
											<td>
												{if !empty($message.ng.reason)}<span class="c_red">※{$message.ng.reason}</span>{/if}
												<textarea name="reason">{$arr_post.reason|default:''}</textarea>
											</td>
										</tr>
										<tr>
											<th>Eメールアドレス</th>
											<td>
												{if !empty($message.ng.mail)}<span class="c_red">※{$message.ng.mail}</span>{/if}
												<input type="email" name="mail" value="{$arr_post.mail|default:''}" />
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td>
												{if !empty($message.ng.tel)}<span class="c_red">※{$message.ng.tel}</span>{/if}
												<input type="tel" name="tel" value="{$arr_post.tel|default:''}" />
											</td>
										</tr>
										<tr>
											<th>住所</th>
											<td>
												{if !empty($message.ng.address)}<span class="c_red">※{$message.ng.address}</span>{/if}
												<input type="text" name="address" value="{$arr_post.address|default:''}" />
											</td>
										</tr>
										<tr>
											<th>備考</th>
											<td>
												{if !empty($message.ng.comment)}<span class="c_red">※{$message.ng.comment}</span>{/if}
												<textarea name="comment">{$arr_post.comment|default:''}</textarea>
											</td>
										</tr>
									</table>
									<p><input type="submit" class="btn_1 mb10" value="入力内容確認" onclick="this.form.action='./check.php'" /></p>
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