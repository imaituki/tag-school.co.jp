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
	<body class="fixed-sidebar no-skin-config">
		<div id="wrapper">
			{include file=$template_secondary action=mypage manage=$_CONTENTS_DIR}
			<div id="page-wrapper" class="gray-bg">
				{include file=$template_header}
				<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-lg-10">
						<h2>{$_CONTENTS_NAME}</h2>
						<ol class="breadcrumb">
							<li><a href="{$_ADMIN.home}/">Home</a></li>
							<li><a href="./">{$_CONTENTS_NAME}</a></li>
							<li><a href="./test.php">テスト送信</a></li>
							<li class="active"><strong>本番送信画面</strong></li>
						</ol>
					</div>
				</div>
				<div class="wrapper wrapper-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-content">
									<p class="mb20">
										メールの配信を行います。<br />
									</p>
									<div id="msg" class="error">
										会員数によっては、送信に時間がかかることがあります。<br />
										<strong>画面が切り替わるまで絶対にこのウィンドウを閉じないで下さい。</strong>
									</div>
									<form action="./send_magazine.php" method="post">
										<div id="searchList">
											<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
												<tbody>
													<tr>
														<th width="150">配信メールの登録</th>
														<td><span class="c_blue">登録完了</span> [{$magazine.title}]</td>
													</tr>
												</tbody>
											</table>
											<div class="hr-line-dashed"></div>
											<div class="button clearfix mb20">
												<div class="form-group">
													<div class="fl_right">
														<input type="submit" name="submit" class="btn" onclick="if( confirm('送信処理を行います。よろしいですか？') ) { this.form.action='./send_magazine.php' } else { return false; }" value="メールを送信する" />
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>