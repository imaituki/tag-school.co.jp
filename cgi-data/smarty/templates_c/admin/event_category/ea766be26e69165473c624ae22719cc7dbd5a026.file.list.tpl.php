<?php /* Smarty version Smarty-3.1.18, created on 2019-11-20 16:13:07
         compiled from "/home/jwcc/8034/html/admin/contents/event_category/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4497143945dd3a4fd15dae3-06852614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea766be26e69165473c624ae22719cc7dbd5a026' => 
    array (
      0 => '/home/jwcc/8034/html/admin/contents/event_category/template/list.tpl',
      1 => 1574230416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4497143945dd3a4fd15dae3-06852614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dd3a4fd1a2343_16288745',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_event_category' => 0,
    'event_category' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd3a4fd1a2343_16288745')) {function content_5dd3a4fd1a2343_16288745($_smarty_tpl) {?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>カテゴリ名</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["event_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["event_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_event_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["event_category"]->key => $_smarty_tpl->tpl_vars["event_category"]->value) {
$_smarty_tpl->tpl_vars["event_category"]->_loop = true;
?>
					<tr>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['event_category']->value['id_event_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['event_category']->value['name'];?>
</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['event_category']->value['id_event_category'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event_category']->value['id_event_category'];?>
"<?php if ($_smarty_tpl->tpl_vars['event_category']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['event_category']->value['id_event_category'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac" style="text-align:unset;">
							<a href="javascript:void(0)" class="btn btn-sm btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['event_category']->value['id_event_category'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["event_category"]->_loop) {
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
