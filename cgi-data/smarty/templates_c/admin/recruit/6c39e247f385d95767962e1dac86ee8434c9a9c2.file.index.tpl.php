<?php /* Smarty version Smarty-3.1.18, created on 2019-05-08 16:57:51
         compiled from "../template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1577434235cd28bffcf2946-37374473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c39e247f385d95767962e1dac86ee8434c9a9c2' => 
    array (
      0 => '../template/index.tpl',
      1 => 1557302260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1577434235cd28bffcf2946-37374473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    '_CONTENTS_DIR' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'OptionRecruit' => 0,
    '_SESSION' => 0,
    'arr_post' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd28bffd60172_80330792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd28bffd60172_80330792')) {function content_5cd28bffd60172_80330792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/jwcc/8034/cgi-data/smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
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
/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/list.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body class="fixed-sidebar no-skin-config">
		<div id="wrapper">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>'public','manage'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value), 0);?>

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
									<label class="control-label" for="search_category">募集種別</label>
									<div class="input-group">
										<select name="search_category">
											<option value="">選択してください。</option>
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionRecruit']->value),$_smarty_tpl);?>

										</select>
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
