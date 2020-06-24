<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
</head>
<body id="top_28">
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
		<div class="wrapper bg_common">
			<div class="center">
				<h2 class="hl_3 mincho">{$_HTML_HEADER.title}</h2>
				<div class="center">
					<div class="row">
						<div class="col-xs-4 mb20">
							<div class="unit height-1">
								<a href="/{$_DIR_NAME}/article/">
									<p class="image pos_ac height-2 flex_c"><img src="/common/image/contents/28/logo.png" alt="28"></p>
									<p class="text pos_ac">Column</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4 mb20">
							<div class="unit height-1">
								<a href="/{$_DIR_NAME}/edit/">
									<p class="image pos_ac height-2"><i class="fa fa-id-card" aria-hidden="true"></i></p>
									<p class="text pos_ac">会員情報編集</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4 mb20">
							<div class="unit height-1">
								<a href="/{$_DIR_NAME}/logout.php">
									<p class="image pos_ac height-2"><i class="fas fa-sign-out-alt"></i></p>
									<p class="text pos_ac">ログアウト</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="unit height-1 unsubscribe">
								<a href="/{$_DIR_NAME}/unsubscribe/">
									<p class="image pos_ac height-2"><i class="far fa-times-circle"></i></p>
									<p class="text pos_ac">退会</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer mode=mypage}
</div>
</body>
</html>
