<?php /* Smarty version Smarty-3.1.18, created on 2020-01-24 17:03:30
         compiled from "../template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20952291205e2aa4d22dafa9-40742237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536be3878faadbfd3173360df0efbc870ffbb3e2' => 
    array (
      0 => '../template/list.tpl',
      1 => 1579849795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20952291205e2aa4d22dafa9-40742237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_contact' => 0,
    'contact' => 0,
    'OptionContent' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2aa4d232ca16_73149701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2aa4d232ca16_73149701')) {function content_5e2aa4d232ca16_73149701($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th width="100">お問い合わせ日時</th>
			<th width="100">お問い合わせ項目</th>
			<th width="300">名前</th>
			<th width="200">メールアドレス</th>
			<th width="200">住所</th>
			<th width="150">電話番号</th>
			<th class="showhide" width="60">確認</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="100">お問い合わせ日時</th>
			<th width="100">お問い合わせ項目</th>
			<th>名前</th>
			<th width="150">メールアドレス</th>
			<th width="200">住所</th>
			<th width="150">電話番号</th>
			<th class="showhide" width="60">確認</th>
			<th class="delete">削除</th>
		</tr>
	</tfoot>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['contact']->value['check_flg']==1) {?>style="background-color: #dadada;"<?php }?>>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contact']->value['entry_date'],"%Y/%m/%d %H:%M:%S");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['OptionContent']->value[$_smarty_tpl->tpl_vars['contact']->value['content']];?>
</td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['name1'];?>
<br>(<?php echo $_smarty_tpl->tpl_vars['contact']->value['ruby1'];?>
)</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['mail'];?>
</td>
			<td>〒<?php echo $_smarty_tpl->tpl_vars['contact']->value['zip'];?>
<br><?php echo smarty_function_html_select_ken(array('selected'=>(($tmp = @$_smarty_tpl->tpl_vars['contact']->value['prefecture'])===null||$tmp==='' ? '' : $tmp),'pre'=>1),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['contact']->value['tel'];?>
</td>
			<td class="pos_ac">
			<?php if ($_smarty_tpl->tpl_vars['contact']->value['check_flg']!=1) {?>
				<a href="javascript:void(0)" class="btn btn-info btn_check" data-id="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
">確認</a>
			<?php } else { ?>
				確認済
			<?php }?>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['contact']->_loop) {
?>
		<tr>
			<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>