<?php /* Smarty version Smarty-3.1.18, created on 2020-01-23 16:56:01
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19956183335e159de18515b6-67468039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1579764935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19956183335e159de18515b6-67468039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e159de1861d88_13860139',
  'variables' => 
  array (
    'arr_post' => 0,
    '_DIR_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e159de1861d88_13860139')) {function content_5e159de1861d88_13860139($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['temp_var'])) {?>

--------------------------------------------------------
■ 仮登録内容
--------------------------------------------------------

[ メールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>



こちらのURLから本登録に進んでください。
<?php if (empty($_SERVER['HTTPS'])) {?>http://<?php } else { ?>https://<?php }?><?php echo $_SERVER['HTTP_HOST'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/regist/?id=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id'];?>
&user=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['temp_var'];?>


<?php } else { ?>
--------------------------------------------------------
■ 本登録内容
--------------------------------------------------------
[ メールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>


[ パスワード ]
※ご入力いただいたパスワード

こちらから、メールアドレスとパスワードを入力して、マイページにログインしてください。
<?php if (empty($_SERVER['HTTPS'])) {?>http://<?php } else { ?>https://<?php }?><?php echo $_SERVER['HTTP_HOST'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php

<?php }?>
<?php }} ?>
