<?php /* Smarty version Smarty-3.1.18, created on 2020-01-14 18:51:53
         compiled from "/home/tag-school/www/admin/contents/magazine/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10655073815e12e839a6bfd4-49985970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa764b2e3fd464b1538660b28b41bb66f1aaf676' => 
    array (
      0 => '/home/tag-school/www/admin/contents/magazine/template/list.tpl',
      1 => 1578995513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10655073815e12e839a6bfd4-49985970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e12e839aca004_97091372',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'arr_data' => 0,
    '_CONTENTS_ID' => 0,
    'data' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e12e839aca004_97091372')) {function content_5e12e839aca004_97091372($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th></th>
			<th>No.</th>
			<th>タイトル</th>
			<th>送信日</th>
			<th>送信数</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="100"></th>
			<th width="100">No.</th>
			<th>タイトル</th>
			<th width="100">送信日</th>
			<th width="100">送信数</th>
			<th class="delete" width="60">削除</th>
		</tr>
	</tfoot>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		<tr>
			<td class="pos_ac"><a href="./preview.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" target="_blank">プレビュー</a></td>
			<td><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['number']);?>
</td>
			<td>
				<a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['data']->value['post_flg']==1) {?><b>(次回送信予定)</b><?php }?>
			</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],"%Y/%m/%d");?>
</td>
			<td><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['post_num']);?>
</td>
			<td>
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['data']->_loop) {
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
