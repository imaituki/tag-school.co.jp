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
					<h2 class="hl"><img src="{$_FRONT.home}/common/image/content/{$_DIR_NAME}/title.png" alt="マイページ" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div class="row">
									<div class="col-md-3">
										<div class="unit">
											<a href="/{$_DIR_NAME}/article/">
												<p class="image pos_ac"><i class="fa fa-book" aria-hidden="true"></i></p>
												<p class="text pos_ac">ブログ</p>
											</a>
										</div>
									</div>
									<div class="col-md-3">
											<div class="unit">
												<a href="/{$_DIR_NAME}/edit/">
													<p class="image pos_ac"><i class="fa fa-id-card" aria-hidden="true"></i></p>
													<p class="text pos_ac">会員情報編集</p>
												</a>
											</div>
										</div>
									<div class="col-md-3">
										<div class="unit">
											<a href="/{$_DIR_NAME}/unsubscribe/">
												<p class="image pos_ac"><i class="fa fa-id-card" aria-hidden="true"></i></p>
												<p class="text pos_ac">退会</p>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="unit">
											<a href="/{$_DIR_NAME}/logout.php">
												<p class="image pos_ac"><i class="fa fa-sign-out" aria-hidden="true"></i></p>
												<p class="text pos_ac">ログアウト</p>
											</a>
										</div>
									</div>
								</div>
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