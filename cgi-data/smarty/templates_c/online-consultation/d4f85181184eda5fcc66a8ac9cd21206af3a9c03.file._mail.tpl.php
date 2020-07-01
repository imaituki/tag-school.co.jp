<?php /* Smarty version Smarty-3.1.18, created on 2020-06-30 16:28:22
         compiled from "./_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1708071025ef9a2e26b8488-05813745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f85181184eda5fcc66a8ac9cd21206af3a9c03' => 
    array (
      0 => './_mail.tpl',
      1 => 1593420420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708071025ef9a2e26b8488-05813745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef9a2e2722b62_62129636',
  'variables' => 
  array (
    'arr_post' => 0,
    'OptionWeek' => 0,
    'OptionReserveTime' => 0,
    'OptionTeacher' => 0,
    'OptionSex' => 0,
    'OptionGrade' => 0,
    '_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef9a2e2722b62_62129636')) {function content_5ef9a2e2722b62_62129636($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?>--------------------------------------------------------
■ LINEオンライン面談ご予約内容
--------------------------------------------------------
[ 面談希望日時 ]
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"%Y/%m/%d");?>
(<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"w")];?>
) <?php if (!empty($_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time']])) {?><?php echo $_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time']];?>
<?php }?>


[ 担当講師 ]
<?php echo $_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['arr_post']->value['teacher']];?>


[ 保護者氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp)!=null) {?>（<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
）<?php }?>


[ Eメールアドレス ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '-' : $tmp);?>


[ 電話番号 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '-' : $tmp);?>


[ 住所 ]
<?php if (empty($_smarty_tpl->tpl_vars['arr_post']->value['zip'])&&empty($_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])&&empty($_smarty_tpl->tpl_vars['arr_post']->value['address'])) {?>-<?php }?>
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['zip']) {?>〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']!=0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>1),$_smarty_tpl);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>


[ 児童・生徒氏名 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '-' : $tmp);?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp)!=null) {?>（<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
）<?php }?>


[ 性別 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['OptionSex']->value[$_smarty_tpl->tpl_vars['arr_post']->value['sex']])===null||$tmp==='' ? "-" : $tmp);?>


[ 学年 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']])===null||$tmp==='' ? "-" : $tmp);?>


[ 面談で相談したい内容 ]
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '-' : $tmp);?>



***********************************************
<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['company'];?>

〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>

<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['address'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['tel'])) {?>TEL: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['_INFO']->value['fax'])) {?>FAX: <?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<?php }?>
***********************************************
<?php }} ?>
