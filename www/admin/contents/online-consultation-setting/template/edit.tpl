<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<!-- default css -->
<link href="{$_ADMIN.home}/common/css/bootstrap.min.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/animate.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/style.css" rel="stylesheet">
<!-- custom css -->
<link href="{$_ADMIN.home}/common/css/import.css" rel="stylesheet">
{include file=$template_javascript}
<link href="{$_ADMIN.home}/common/css/plugins/datapicker/datepicker3.css" rel="stylesheet" />
{*<link href="../css/weekly/fullcalendar.css" rel="stylesheet">*}
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary action="public" manage=$_CONTENTS_DIR}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-sm-7">
				<h2>{$_CONTENTS_NAME}</h2>
				<ol class="breadcrumb">
					<li><a href="/admin/">Home</a></li>
					<li class="active"><strong>{$_CONTENTS_NAME}</strong></li>
				</ol>
			</div>
			<div class="col-sm-5 m-b-xs pos_ar mt30">
				<a href="/online-consultation/" target="_blank" class="btn btn-info btn-s">予約フォームを確認する</a>
			</div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<!-- row -->
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>オンライン面談予約設定変更</h5>
						</div>
						{include file="./form.tpl" mode="edit"}
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
