<?php /* Smarty version Smarty-3.1.18, created on 2020-08-28 05:55:46
         compiled from "/home/tag-school/www//common/include/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16927729905e295c9be8e927-68008430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c52b8aa5a65debfa2666f962af126ee431d3bef' => 
    array (
      0 => '/home/tag-school/www//common/include/header.tpl',
      1 => 1598423100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16927729905e295c9be8e927-68008430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e295c9be90255_02765321',
  'variables' => 
  array (
    '_FRONT' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e295c9be90255_02765321')) {function content_5e295c9be90255_02765321($_smarty_tpl) {?><header>
<div id="head">
	<div class="head_wrap">
		<h1 class="site_logo"><a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/"><img src="/common/image/head/logo.png" alt="TAG school" /></a></h1>
		<div class="head_contact _head hidden-xs">
			<div class="tel_unit">
				<span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span>
				<span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['receipt_time'];?>
（<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['rec_holiday'];?>
休校）</span>
			</div>
			<div class="mail_unit"><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/" class="button _circle"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ">お問い合わせ</a></div>
		</div>
		<div id="btn_open"><a href="javascript:void(0);"><i class="fa fa-bars"></i></a></div>
	</div>
	<div id="head_navi">
		<div class="center">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/about/">TAGについて</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/strength/">TAGの強み</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#course">コース紹介</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#space">TAGの空間</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/#teachers">講師紹介</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/information/">お知らせ</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/">お問い合わせ</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/28/">Mypage</a></li>
				<li class="head_contact visible-xs">
					<div class="tel_unit">
						<span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><img src="/common/image/head/phone.png" class="pos_vm" alt="電話番号" /><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span>
						<span class="time">受付時間 <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['receipt_time'];?>
（<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['rec_holiday'];?>
定休）</span>
					</div>
					<div class="mail_unit"><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/" class="button _circle"><img src="/common/image/head/mail.png" class="pos_vm" alt="お問い合わせ" />お問い合わせ</a></div>
				</li>
				
			</ul>
		</div>
	</div>
</div>
</header>
<?php }} ?>
