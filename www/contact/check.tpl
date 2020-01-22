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
					<h2 class="hl">お問い合わせ 確認</h2>
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
											<th>保護者氏名</th>
											<td>
												{$arr_post.name2|default:''}
												<input type="hidden" name="name2" value="{$arr_post.name2|default:''}" />
											</td>
										</tr>
										<tr>
											<th>保護者氏名(フリガナ)</th>
											<td>
												{$arr_post.ruby2|default:''}
												<input type="hidden" name="ruby2" value="{$arr_post.ruby2|default:''}" />
											</td>
										</tr>
										<tr>
											<th>入塾希望理由</th>
											<td>
												{$arr_post.reason|nl2br}
												<input type="hidden" name="reason" value="{$arr_post.reason|default:''}" />
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
											<th>住所</th>
											<td>
												{$arr_post.address|default:''}
												<input type="hidden" name="address" value="{$arr_post.address|default:''}" />
											</td>
										</tr>
										<tr>
											<th>備考</th>
											<td>
												{$arr_post.comment|nl2br}
												<input type="hidden" name="comment" value="{$arr_post.comment|default:''}" />
											</td>
										</tr>
									</table>
									<p><input type="submit" class="btn_1" onclick="this.form.action='./'" value="戻る"></p>
									<p><input type="submit" class="btn_1 mb10" onclick="this.form.action='./send.php'" value="送信"></p>
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