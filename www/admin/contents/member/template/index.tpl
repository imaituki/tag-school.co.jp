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
							<li><a href="/admin/">Home</a></li>
							<li class="active"><strong>{$_CONTENTS_NAME}</strong></li>
						</ol>
					</div>
					<div class="col-lg-2 m-b-xs pos_ar mt30">
						<a href="./new.php" class="btn btn-primary btn-s">新規登録</a>
					</div>
				</div>
				<div class="wrapper wrapper-content">
					<div class="ibox-content m-b-sm border-bottom">
						<div class="row">
							<form method="post" action="" id="formSearch" enctype="multipart/form-data">
								{*
								<div class="col-sm-2">
									<div class="input-group">
										<label>
											<input type="checkbox" name="search_mail_magazine_flg" value="1" {if $_SESSION.admin.member.search.POST.search_mail_magazine_flg == 1}checked{/if} />
											メールマガジン配信希望
										</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="input-group">
										<label>
											登録状況
											<select name="search_regist_flg">
												<option value="">選択してください。</option>
												{html_options options=$OptionRegistFlg selected=$_SESSION.admin.member.search.POST.search_regist_flg}
											</select>
										</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="input-group">
										<label>
											退会希望
											<select name="search_delete_flg">
												<option value="">選択してください。</option>
												{html_options options=$OptionYesNo selected=$_SESSION.admin.member.search.POST.search_delete_flg}
											</select>
										</label>
									</div>
								</div>
								*}
								<div class="col-sm-4">
									<input type="text" id="search_keyword" name="search_keyword" value="{$_SESSION.admin.member.search.POST.search_keyword|default:''}" placeholder="キーワード" class="form-control" />
								</div>
								<div class="col-sm-2">
									<div class="input-group">
										<span class="input-group-btn">
											<label class="control-label" for="search_keyword">&nbsp;</label>
											<button type="button" class="btn btn-m btn-primary btn_search"> 検索</button>
											<a href="javascript:void(0)" class="reset_btn btn_reset"> リセット</a>
											<input type="hidden" name="search_area" value="{$arr_post.search_area}">
										</span>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-content">
									<div id="msg"{if $message == NULL} style="display:none"{/if}{if $message.ng|default:'' != NULL} class="error mb20"{elseif $message.ok|default:'' != NULL} class="ok mb20"{/if}>{if $message.ng|default:'' != NULL}<i class="icon-attention"></i> {$message.ng}{elseif $message.ok|default:'' != NULL}<i class="icon-check"></i> {$message.ok}{/if}</div>
									<div id="searchList">
										{include file="./list.tpl"}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>