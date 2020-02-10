<?php /* Smarty version Smarty-3.1.18, created on 2020-02-10 16:54:57
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4750858555e2e70da5fc5d7-65213519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1581318644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4750858555e2e70da5fc5d7-65213519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2e70da646817_86598730',
  'variables' => 
  array (
    'arr_post' => 0,
    '_DIR_NAME' => 0,
    'OptionYesNo' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e70da646817_86598730')) {function content_5e2e70da646817_86598730($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['temp_var'])) {?>

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

[ メールマガジン配信を希望する ]
<?php echo $_smarty_tpl->tpl_vars['OptionYesNo']->value[$_smarty_tpl->tpl_vars['arr_post']->value['mail_magazine_flg']];?>


こちらから、メールアドレスとパスワードを入力して、マイページにログインしてください。
<?php if (empty($_SERVER['HTTPS'])) {?>http://<?php } else { ?>https://<?php }?><?php echo $_SERVER['HTTP_HOST'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php

<?php }?>


***********************************************
<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['company'];?>

〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>

<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['address'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['tel'])) {?>TEL: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
<?php }?> 
<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['fax'])) {?>FAX: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<?php }?> 
***********************************************<?php }} ?>
