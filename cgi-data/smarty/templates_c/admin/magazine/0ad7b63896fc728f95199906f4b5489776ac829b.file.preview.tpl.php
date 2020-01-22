<?php /* Smarty version Smarty-3.1.18, created on 2020-01-07 18:42:17
         compiled from "../template/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10506583305e145279cf80f3-26312835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad7b63896fc728f95199906f4b5489776ac829b' => 
    array (
      0 => '../template/preview.tpl',
      1 => 1578390041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10506583305e145279cf80f3-26312835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'magazine' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e145279d1d276_41123688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e145279d1d276_41123688')) {function content_5e145279d1d276_41123688($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['magazine']->value['title'];?>
｜メール配信管理</title>
<link rel="stylesheet" type="text/css" href="/primary/admin/common/css/style.css" />
<script type="text/javascript" src="/primary/admin/common/js/script.js"></script>
<style type="text/css">
<?php echo $_smarty_tpl->tpl_vars['message']->value['css'];?>

</style>
</head>
<body style="background:none;">
<div style="width:500px; word-break:break-all;">
	<div style="width:100%; background:#FFDDCC; padding: 5px 0px 5px 5px;">
		<strong>件名：<?php echo $_smarty_tpl->tpl_vars['magazine']->value['title'];?>
</strong>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['magazine']->value['header'];?>

	<br />
	<br />
	○○○○様<br />
	<br />
	<br />
	<?php echo $_smarty_tpl->tpl_vars['magazine']->value['main'];?>


	<br />
	<?php echo $_smarty_tpl->tpl_vars['magazine']->value['footer'];?>

</div>
</body>
</html>
<?php }} ?>
