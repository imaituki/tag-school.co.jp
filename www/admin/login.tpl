<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>管理画面</title>
		<link href="{$_ADMIN.home}/common/css/import.css" rel="stylesheet" />
		{include file=$template_javascript}
		<script src="{$_ADMIN.home}/common/js/lightbox/import.js"></script>
		<script src="{$_ADMIN.home}/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
		<script src="{$_ADMIN.home}/common/js/list.js"></script>
	</head>
	<body id="login" class="pace-done">
		<div id="body">
			<div id="login_area">
				<div class="container center_view max_w400">
					<div class="row">
						<header class="message_text">
							<h1 class="large f_bold"><span>管理画面</span></h1>
						</header>
						{if !empty($message.ng)}<div class="error_txt">※{$message.ng}</div>{/if}
						<form class="form-horizontal" action="" method="post">
							<div id="user_id" class="mb10">
								 <input type="text" class="form-control" name="account" id="account" value="{$arr_post.account|default:""}" maxlength="255" placeholder="アカウント名" />
							</div>
							<div id="pass">
								<input type="password" class="form-control" name="password" id="password" value="" maxlength="255" placeholder="パスワード" />
							</div>
							<div class="button">
								<button>ログイン</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
