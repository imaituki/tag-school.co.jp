<?php /* Smarty version Smarty-3.1.18, created on 2019-11-19 17:15:20
         compiled from "../template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19648699505dd39d7bc5d2f0-34167429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c39e247f385d95767962e1dac86ee8434c9a9c2' => 
    array (
      0 => '../template/index.tpl',
      1 => 1574151302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19648699505dd39d7bc5d2f0-34167429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dd39d7bce08e5_37617763',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    '_CONTENTS_DIR' => 0,
    '_SESSION' => 0,
    'arr_post' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd39d7bce08e5_37617763')) {function content_5dd39d7bce08e5_37617763($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>管理画面</title>
		<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/import.css" rel="stylesheet" />
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/lightbox/import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/datapicker/bootstrap-datepicker-import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/list.js"></script>
		<script src="./../js/script.js"></script>
	</head>
	<body class="fixed-sidebar no-skin-config">
		<div id="wrapper">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"talent",'manage'=>((string)$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value)), 0);?>

			<div id="page-wrapper" class="gray-bg">
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-lg-10">
						<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
						<ol class="breadcrumb">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/">Home</a></li>
							<li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</strong></li>
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
								<div class="col-sm-4">
									<div class="form-group">
										<label class="control-label" for="date_added">日付</label>
										<div class="input-daterange input-group" id="datepicker">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" class="input-sm form-control datepicker" name="search_date_start" id="search_date_start" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SESSION']->value['company'][$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value]['search']['POST']['search_date_start'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
											<span class="input-group-addon">～</span>
											<input type="text" class="input-sm form-control datepicker" name="search_date_end" id="search_date_end"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SESSION']->value['company'][$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value]['search']['POST']['search_date_end'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<label class="control-label" for="search_keyword">キーワード</label>
									<div class="input-group">
										<input type="text" id="search_keyword" name="search_keyword" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SESSION']->value['admin'][$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value]['search']['POST']['search_keyword'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="キーワード" class="form-control">
										<span class="input-group-btn">
											<label class="control-label" for="search_keyword">&nbsp;</label>
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
									<div id="msg"<?php if ($_smarty_tpl->tpl_vars['message']->value==null) {?> style="display:none"<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="error mb20"<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="ok mb20"<?php }?>><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?><i class="icon-attention"></i> <?php echo $_smarty_tpl->tpl_vars['message']->value['ng'];?>
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
	</body>
</html>
<?php }} ?>
