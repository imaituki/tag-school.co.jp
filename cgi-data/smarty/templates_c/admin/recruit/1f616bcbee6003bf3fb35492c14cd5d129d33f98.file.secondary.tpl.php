<?php /* Smarty version Smarty-3.1.18, created on 2019-05-08 16:57:51
         compiled from "/home/jwcc/8034/html/admin/common/inc/secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19395874395cd28bffd83bd7-22473083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f616bcbee6003bf3fb35492c14cd5d129d33f98' => 
    array (
      0 => '/home/jwcc/8034/html/admin/common/inc/secondary.tpl',
      1 => 1557302231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19395874395cd28bffd83bd7-22473083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manage' => 0,
    '_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd28bffdaba63_42941431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd28bffdaba63_42941431')) {function content_5cd28bffdaba63_42941431($_smarty_tpl) {?><nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
			<li class="nav-header">
				
			</li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=='') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=="information") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information/"><i class="fa fa-info-circle"></i><span class="nav-label">お知らせ管理</span></a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=="recruit") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/recruit/"><i class="fa fa-file-text"></i><span class="nav-label">採用情報管理</span></a></li>
			<li<?php if ($_smarty_tpl->tpl_vars['manage']->value=="siteconf") {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/siteconf/"><i class="fa fa-gear"></i><span class="nav-label">サイト設定</span></a></li>
		</ul>
	</div>
</nav><?php }} ?>
