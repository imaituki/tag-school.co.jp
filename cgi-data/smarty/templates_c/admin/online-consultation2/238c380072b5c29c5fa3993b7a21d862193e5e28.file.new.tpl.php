<?php /* Smarty version Smarty-3.1.18, created on 2020-07-10 12:44:03
         compiled from "../template/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5641020715ef9647c83d307-39933895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238c380072b5c29c5fa3993b7a21d862193e5e28' => 
    array (
      0 => '../template/new.tpl',
      1 => 1593501958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5641020715ef9647c83d307-39933895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef9647c8861d3_11344726',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    '_CONTENTS_DIR' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef9647c8861d3_11344726')) {function content_5ef9647c8861d3_11344726($_smarty_tpl) {?><!DOCTYPE html>
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
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"online-consultation",'manage'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-sm-10">
				<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
				<ol class="breadcrumb">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/">Home</a></li>
					<li><a href="./"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</a></li>
					<li class="active"><strong>新規登録</strong></li>
				</ol>
			</div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-sm-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
管理　新規登録 </h5>
						</div>
						<?php echo $_smarty_tpl->getSubTemplate ("./form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>"new"), 0);?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>
