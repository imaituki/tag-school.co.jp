<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 17:49:02
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13676558325e280c7edab230-85337950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1579682008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13676558325e280c7edab230-85337950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr_post' => 0,
    'OptionGrade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e280c7edf0403_69625795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e280c7edf0403_69625795')) {function content_5e280c7edf0403_69625795($_smarty_tpl) {?>--------------------------------------------------------
■ お問い合わせ内容
--------------------------------------------------------
[ 生徒氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '-' : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
)<?php }?> 

[ 学年 ]
<?php echo $_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']];?>


[ 保護者氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '-' : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
)<?php }?> 

[ 入塾希望理由 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reason'])===null||$tmp==='' ? '-' : $tmp);?>


[ Eメールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '-' : $tmp);?>


[ 電話番号 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '-' : $tmp);?>


[ 住所 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '-' : $tmp);?>


[ 備考 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>


<?php }} ?>