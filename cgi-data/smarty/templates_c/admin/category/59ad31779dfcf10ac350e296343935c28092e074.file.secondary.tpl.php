<?php /* Smarty version Smarty-3.1.18, created on 2020-01-21 16:56:50
         compiled from "/home/tag-school/www//admin/common/inc/secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12228282435e26aec23987a6-47424356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59ad31779dfcf10ac350e296343935c28092e074' => 
    array (
      0 => '/home/tag-school/www//admin/common/inc/secondary.tpl',
      1 => 1578997977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12228282435e26aec23987a6-47424356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manage' => 0,
    '_ADMIN' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e26aec23ca3a0_93436658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e26aec23ca3a0_93436658')) {function content_5e26aec23ca3a0_93436658($_smarty_tpl) {?><nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
			<li class="nav-header">
				
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='') {?> class="active"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='information') {?> class="active"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/information/"><i class="fa fa-info-circle"></i><span class="nav-label">お知らせ管理</span></a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='contact') {?> class="active"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/contact/"><i class="fa fa-question-circle" aria-hidden="true"></i><span class="nav-label">お問い合わせ管理</span></a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='siteconf') {?> class="active"<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/siteconf/"><i class="fa fa-gear"></i><span class="nav-label">サイト設定</span></a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['action']->value=='mypage') {?> class="active"<?php }?>>
				<a href="#" class="nav-drop">
					<i class="fa fa-r fa-th-large"></i>
					<span class="nav-label">マイページ管理 </span>
					<i class="fa <?php if ($_smarty_tpl->tpl_vars['action']->value=='mypage') {?>fa-angle-down<?php } else { ?>fa-angle-left<?php }?> fl_arrow_r"></i>
				</a>
				<ul class="nav nav-second-level">
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='member') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/member/"><i class="fa fa-group"></i>会員管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='article') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/article/"><i class="fa fa-folder-open"></i>ブログ管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='article_category') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/article_category/"><i class="fa fa-folder-open"></i>ブログカテゴリー管理</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['manage']->value=='magazine') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/contents/magazine/"><i class="fa fa-newspaper-o"></i>メールマガジン配信</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<?php }} ?>
