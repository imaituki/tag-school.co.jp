<?php /* Smarty version Smarty-3.1.18, created on 2020-07-20 12:49:46
         compiled from "./mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13676558325e280c7edab230-85337950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140ed6d1ad3b6643e3b58b9fe629cd46e8b9926b' => 
    array (
      0 => './mail.tpl',
      1 => 1594111585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13676558325e280c7edab230-85337950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e280c7edf0403_69625795',
  'variables' => 
  array (
    'arr_post' => 0,
    'OptionContent' => 0,
    'OptionSchoolType' => 0,
    'OptionGrade' => 0,
    'OptionRequest' => 0,
    'kikkake' => 0,
    'val' => 0,
    'OptionKikkake' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e280c7edf0403_69625795')) {function content_5e280c7edf0403_69625795($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?>--------------------------------------------------------
■ お問い合わせ内容
--------------------------------------------------------
[ お問い合わせ項目 ]
<?php echo $_smarty_tpl->tpl_vars['OptionContent']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content']];?>


[ 生徒氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '-' : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
)<?php }?>

[ 在籍学校名 ]
<?php echo $_smarty_tpl->tpl_vars['OptionSchoolType']->value[$_smarty_tpl->tpl_vars['arr_post']->value['school_type']];?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['school'])===null||$tmp==='' ? '' : $tmp);?>


[ 学年 ]
<?php echo $_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']];?>


[ 希望項目 ]
<?php echo $_smarty_tpl->tpl_vars['OptionRequest']->value[$_smarty_tpl->tpl_vars['arr_post']->value['request']];?>


[ 入塾希望理由 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reason'])===null||$tmp==='' ? '-' : $tmp);?>


[ 当校を知ったきっかけ ]
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kikkake']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
・<?php echo $_smarty_tpl->tpl_vars['OptionKikkake']->value[$_smarty_tpl->tpl_vars['val']->value];?>
<?php if ($_smarty_tpl->tpl_vars['val']->value==5) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['kikkake_5'];?>
)<?php }?><?php if ($_smarty_tpl->tpl_vars['val']->value==6) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['kikkake_6'];?>
)<?php }?> 
<?php } ?>

[ 保護者氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '-' : $tmp);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])) {?>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
)<?php }?>

[ Eメールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '-' : $tmp);?>


[ 電話番号 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '-' : $tmp);?>


<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['zip']!=null||$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']!=0||$_smarty_tpl->tpl_vars['arr_post']->value['address']!=null) {?>
[ 住所 ]
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['zip']) {?>〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']!=0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>1),$_smarty_tpl);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>

<?php }?>

[ お問い合わせ内容 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '-' : $tmp);?>



***********************************************
<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['company'];?>

〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>

<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['address'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['tel'])) {?>TEL: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
<?php }?> 
<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['fax'])) {?>FAX: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<?php }?> 
***********************************************<?php }} ?>
