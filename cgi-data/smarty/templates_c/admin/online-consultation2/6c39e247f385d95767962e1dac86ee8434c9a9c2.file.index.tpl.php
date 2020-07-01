<?php /* Smarty version Smarty-3.1.18, created on 2020-06-30 16:27:18
         compiled from "../template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17966714575ef7097def46d7-61119800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c39e247f385d95767962e1dac86ee8434c9a9c2' => 
    array (
      0 => '../template/index.tpl',
      1 => 1593501958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17966714575ef7097def46d7-61119800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef7097e009b38_58200966',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    '_CONTENTS_DIR' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'arr_get' => 0,
    'OptionTeacher' => 0,
    'arr_post' => 0,
    '_SESSION' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef7097e009b38_58200966')) {function content_5ef7097e009b38_58200966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<!-- default css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/animate.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/style.css" rel="stylesheet">
<!-- custom css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/plugins/footable/footable.core.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/import.css" rel="stylesheet">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/plugins/datepicker/datepicker3.css" rel="stylesheet" />
<link href="../css/weekly/fullcalendar.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/list.js"></script>
<script src="../js/script.js"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"online-consultation",'manage'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="wrapper-content-main">
			<div class="row wrapper border-bottom white-bg page-heading">
				<div class="col-sm-7">
					<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
					<ol class="breadcrumb">
						<li><a href="/admin/">Home</a></li>
						<li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</strong></li>
					</ol>
				</div>
				<div class="col-sm-5 m-b-xs pos_ar mt30">
					<a href="/online-consultation/" target="_blank" class="btn btn-info btn-s mb5">予約フォームを確認する</a>
					<a href="./new.php?date=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_get']->value['date'])===null||$tmp==='' ? '' : $tmp);?>
" class="btn btn-primary btn-s mb5">新規登録</a>
				</div>
			</div>
			<div class="wrapper wrapper-content">
				<div class="ibox-content m-b-sm border-bottom">
					<div class="row">
						<form method="post" action="" id="formSearch" enctype="multipart/form-data">
							<div class="col-sm-4">
								<label class="control-label" for="search_keyword">担当講師</label>
								<div class="input-group">
									<select class="form-control" name="search_teacher">
										<option value="">担当講師で絞り込む</option>
										<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionTeacher']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['search_teacher'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

									</select>
									<input type="hidden" name="search_date_start" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['search_date_start'];?>
">
									<input type="hidden" name="search_date_end" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['search_date_end'];?>
">
									<!-- <input type="text" id="search_keyword" name="search_keyword" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SESSION']->value['admin']['article_category']['search']['POST']['search_keyword'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="キーワード" class="form-control"> -->
									<span class="input-group-btn">
										<label class="control-label" for="search_teacher">&nbsp;</label>
										<button type="button" class="btn btn-m btn-primary btn_search"> 検索</button>
										<a href="javascript:void(0)" class="reset_btn btn_reset"> リセット</a>
										<input type="hidden" name="search_area" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['search_area'];?>
">
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
								<div id="msg"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp)==null) {?> style="display:none"<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="error mb20"<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="ok mb20"<?php }?>><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?><i class="icon-attention"></i> <?php echo $_smarty_tpl->tpl_vars['message']->value['ng'];?>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?><i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['message']->value['ok'];?>
<?php }?></div>
								<div id="searchList">
									<?php echo $_smarty_tpl->getSubTemplate ("./list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<script type="text/javascript">

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



</script>
</body>
</html>
<?php }} ?>
