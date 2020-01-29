<?php /* Smarty version Smarty-3.1.18, created on 2020-01-28 12:22:44
         compiled from "/home/tag-school/www/admin/contents/contact/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155323555e2a98544439a8-66619384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b977f79f235f86bee128297040c7847d8d6055be' => 
    array (
      0 => '/home/tag-school/www/admin/contents/contact/template/form.tpl',
      1 => 1580180292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155323555e2a98544439a8-66619384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2a985447e7f3_60537225',
  'variables' => 
  array (
    'arr_post' => 0,
    'OptionContent' => 0,
    'OptionGrade' => 0,
    'OptionRequest' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2a985447e7f3_60537225')) {function content_5e2a985447e7f3_60537225($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><div class="ibox-content form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">お問い合わせ項目</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['OptionContent']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content']];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">生徒氏名</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
)<?php }?>
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">学年</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">希望項目</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['OptionRequest']->value[$_smarty_tpl->tpl_vars['arr_post']->value['request']];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">お問い合わせ内容</label>
		<div class="col-sm-6">
			<?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']);?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">保護者氏名</label>
		<div class="col-sm-6">
			<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['name2'])) {?><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
)<?php }?>
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Eメールアドレス</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">電話番号</label>
		<div class="col-sm-6">
			<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">住所</label>
		<div class="col-sm-6">
			〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
<br>
			<?php echo smarty_function_html_select_ken(array('selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? '' : $tmp),'pre'=>1),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>

		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="button clearfix mb20">
		<div class="form-group">
			<div class="fl_right">
				<a href="." type="button" class="btn btn-primary">一覧へ戻る</a>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
