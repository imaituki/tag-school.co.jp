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
							<li class="active"><strong>テスト送信</strong></li>
						</ol>
					</div>
					<div class="col-lg-2 m-b-xs pos_ar mt30">
						<a href="./send.php?id={$data.$_CONTENTS_ID}" class="btn btn-primary btn-s">本番送信画面</a>
					</div>
				</div>
				<div class="wrapper wrapper-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-content">
									<div id="msg" {if $message == NULL} style="display:none"{/if}{if $message.ng|default:'' != NULL} class="error mb20"{elseif $message.ok|default:'' != NULL} class="ok mb20"{/if}>{if $message.ng|default:'' != NULL}<i class="icon-attention"></i> {$message.ng}{elseif $message.ok|default:'' != NULL}<i class="icon-check"></i> {$message.ok}{/if}</div>
									<form action="./test_send.php" method="post">
										<div id="searchList">
											<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
												<tbody>
													<tr>
														<th class="pos_ac">タイトル</th>
														<td>{$data.title}</td>
													</tr>
													<tr>
														<th class="pos_ac">本文</th>
														<td>
															{$data.header|nl2br}<br />
															<br />
															○○○○様<br />
															<br />
															{$data.main|nl2br}<br />
															<br />
															{$data.footer|nl2br}
														</td>
													</tr>
													<tr>
														<th class="pos_ac">管理メール以外に送信</th>
														<td>
															<input type="text" class="text w500" name="mail" id="mail" value="{$arr_post.mail}" />
														</td>
													</tr>
												</tbody>
											</table>
											<div class="hr-line-dashed"></div>
											<div class="button clearfix mb20">
												<div class="form-group">
													<div class="fl_right">
														<input type="submit" name="submit" class="btn" value="テスト送信する" />
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