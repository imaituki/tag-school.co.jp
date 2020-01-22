<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 18:54:16
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13783253425e183da1af39d7-34976193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1579254324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13783253425e183da1af39d7-34976193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e183da1b01f32_22132536',
  'variables' => 
  array (
    'arr_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e183da1b01f32_22132536')) {function content_5e183da1b01f32_22132536($_smarty_tpl) {?>[ メールアドレス ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>


[ 仮パスワード(※発行から24時間有効) ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['temp_password'];?>


<?php }} ?>
