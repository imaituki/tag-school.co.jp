<?php /* Smarty version Smarty-3.1.18, created on 2020-06-19 23:19:48
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11224063835eddd2bac7cb49-16931879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1592576387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11224063835eddd2bac7cb49-16931879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eddd2bac8d977_34398022',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eddd2bac8d977_34398022')) {function content_5eddd2bac8d977_34398022($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="online-consultation">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/online-consultation/top.jpg" alt="LINEオンライン面談予約"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">LINEオンライン面談予約</span><span class="sub">Online-consultation</span></h2>
			</div>
		</div>
	</div>
	<div class="center wrapper-t">
		<p class="pos_ac large">LINEオンライン面談予約　6/22から受付スタート</p>
	</div>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
