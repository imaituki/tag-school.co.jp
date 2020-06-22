<?php /* Smarty version Smarty-3.1.18, created on 2020-06-19 17:54:06
         compiled from "../template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14527178095eec7d2ecd0618-17156118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536be3878faadbfd3173360df0efbc870ffbb3e2' => 
    array (
      0 => '../template/list.tpl',
      1 => 1592486774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14527178095eec7d2ecd0618-17156118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'mst_staff' => 0,
    'staff' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eec7d2ecec256_17932028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eec7d2ecec256_17932028')) {function content_5eec7d2ecec256_17932028($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th>スタッフ名</th>
			<th>アカウント</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["staff"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["staff"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mst_staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["staff"]->key => $_smarty_tpl->tpl_vars["staff"]->value) {
$_smarty_tpl->tpl_vars["staff"]->_loop = true;
?>
		<tr id="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_staff'];?>
">
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_staff'];?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['staff']->value['account'];?>
</td>
			<td class="pos_al">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id_staff'];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["staff"]->_loop) {
?>
		<tr>
			<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
		</tr>
		<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="10"><ul class="pagination pull-right">
			</ul></td>
		</tr>
	</tfoot>
</table>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
