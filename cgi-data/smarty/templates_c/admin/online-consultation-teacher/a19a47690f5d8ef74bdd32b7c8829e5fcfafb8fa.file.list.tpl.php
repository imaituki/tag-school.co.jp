<?php /* Smarty version Smarty-3.1.18, created on 2020-06-27 17:58:22
         compiled from "/home/tag-school/www/admin/contents/online-consultation-teacher/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16497824335ef70a2e5b7725-14006348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19a47690f5d8ef74bdd32b7c8829e5fcfafb8fa' => 
    array (
      0 => '/home/tag-school/www/admin/contents/online-consultation-teacher/template/list.tpl',
      1 => 1593146340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16497824335ef70a2e5b7725-14006348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_teacher' => 0,
    'teacher' => 0,
    'arr_post' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef70a2e5d84c2_10799400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef70a2e5d84c2_10799400')) {function content_5ef70a2e5d84c2_10799400($_smarty_tpl) {?>
<script type="text/javascript">
	sortableInit();
</script>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
	<thead>
		<tr>
			<th></th>
			<th>講師名</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["teacher"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_teacher']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher"]->key => $_smarty_tpl->tpl_vars["teacher"]->value) {
$_smarty_tpl->tpl_vars["teacher"]->_loop = true;
?>
		<tr id="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
">
			<td class="pos_ac pos_vm move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?>☓<?php } else { ?><i class="fa fa-r fa-sort"><span></span></i><?php }?></td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</a></td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
"<?php if ($_smarty_tpl->tpl_vars['teacher']->value['display_flg']==1) {?> checked<?php }?>>
						<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id_online_consultation_teacher'];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["teacher"]->_loop) {
?>
		<tr>
			<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
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
