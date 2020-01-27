<?php /* Smarty version Smarty-3.1.18, created on 2020-01-24 18:00:19
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7299739855e2ab22379a704-84693413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '7299739855e2ab22379a704-84693413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2ab2237a5508_31505109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ab2237a5508_31505109')) {function content_5e2ab2237a5508_31505109($_smarty_tpl) {?>[ メールアドレス ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>


[ 仮パスワード(※発行から24時間有効) ]
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['temp_password'];?>


<?php }} ?>
