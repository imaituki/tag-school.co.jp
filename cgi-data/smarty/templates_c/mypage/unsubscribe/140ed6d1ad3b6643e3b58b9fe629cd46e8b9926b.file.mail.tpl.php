<?php /* Smarty version Smarty-3.1.18, created on 2020-01-31 13:41:25
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576784935e16fcb2535752-39238476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1580444626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576784935e16fcb2535752-39238476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e16fcb2541254_44164302',
  'variables' => 
  array (
    'arr_post' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e16fcb2541254_44164302')) {function content_5e16fcb2541254_44164302($_smarty_tpl) {?>
[ メールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>



***********************************************
<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['company'];?>

〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>

<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['address'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['tel'])) {?>TEL: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
<?php }?> 
<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['fax'])) {?>FAX: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<?php }?> 
***********************************************<?php }} ?>
