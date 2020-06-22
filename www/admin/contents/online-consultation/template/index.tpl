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
<link href="{$_ADMIN.home}/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/style.css" rel="stylesheet">
<!-- custom css -->
<link href="{$_ADMIN.home}/common/css/plugins/footable/footable.core.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
<link href="{$_ADMIN.home}/common/css/import.css" rel="stylesheet">
{include file=$template_javascript}
<link href="{$_ADMIN.home}/common/css/plugins/datepicker/datepicker3.css" rel="stylesheet" />
<link href="../css/weekly/fullcalendar.css" rel="stylesheet">
<script src="{$_ADMIN.home}/common/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{$_ADMIN.home}/common/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script src="{$_ADMIN.home}/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
<script src="{$_ADMIN.home}/common/js/list.js"></script>
<script src="../js/script.js"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	{include file=$template_secondary action=public manage=$_CONTENTS_DIR}
	<div id="page-wrapper" class="gray-bg">
		{include file=$template_header}
		<div class="wrapper-content-main">
			<div class="row wrapper border-bottom white-bg page-heading">
				<div class="col-sm-7">
					<h2>{$_CONTENTS_NAME}</h2>
					<ol class="breadcrumb">
						<li><a href="/admin/">Home</a></li>
						<li class="active"><strong>{$_CONTENTS_NAME}</strong></li>
					</ol>
				</div>
				<div class="col-sm-5 m-b-xs pos_ar mt30">
					<a href="/online-consultation/" target="_blank" class="btn btn-info btn-s mb5">予約フォームを確認する</a>
					<a href="./new.php?date={$arr_get.date|default:''}" class="btn btn-primary btn-s mb5">新規登録</a>
				</div>
			</div>
			<div class="wrapper wrapper-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox">
							<div class="ibox-content">
								<div id="msg"{if $message|default:"" == NULL} style="display:none"{/if}{if $message.ng|default:"" != NULL} class="error mb20"{elseif $message.ok|default:"" != NULL} class="ok mb20"{/if}>{if $message.ng|default:"" != NULL}<i class="icon-attention"></i> {$message.ng}{elseif $message.ok|default:"" != NULL}<i class="icon-check"></i> {$message.ok}{/if}</div>
								<div id="searchList">
									{include file="./list.tpl"}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{*
		<div class="popup">
			<div id="overlay">
				{include file="./popup.tpl"}
			</div>
		</div>
		*}
	</div>
</div>
{*<script src="{$_RENEWAL_PATH}/admin/common/js/TableFix.js"></script>*}
<script type="text/javascript">
{literal}
	$(document).on('change','#change_date',function() {
		if($(this).val().length){
			var date  = $(this).val();
			var year  = date.split('/')[0];
			var month = date.split('/')[1];
			window.location.href = "./index.php?y=" + year + "&m=" + month;
		}else{
			window.location.href = "./index.php";
		}
	});
{/literal}
{*
{if $_SESSION.admin.calendar.search.style != "date"}
{literal}
	$(window).on("load", function(){
		var table_width = $('.wrapper-content-main').width();
		$('.wrapper-content-main-table table').tablefix({width:table_width,height: 700, fixRows: 1, fixCols: 1});
	});
{/literal}
{/if}
*}

</script>
</body>
</html>
