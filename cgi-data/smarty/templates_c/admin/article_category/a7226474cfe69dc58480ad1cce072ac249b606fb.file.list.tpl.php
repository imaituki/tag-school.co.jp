<?php /* Smarty version Smarty-3.1.18, created on 2020-01-14 16:55:21
         compiled from "/home/tag-school/www/admin/contents/article_category/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19650314165e049457410eb6-53815478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7226474cfe69dc58480ad1cce072ac249b606fb' => 
    array (
      0 => '/home/tag-school/www/admin/contents/article_category/template/list.tpl',
      1 => 1577441598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19650314165e049457410eb6-53815478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e049457456a02_96759660',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_article_category' => 0,
    'article_category' => 0,
    'arr_post' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e049457456a02_96759660')) {function content_5e049457456a02_96759660($_smarty_tpl) {?>
<script type="text/javascript">
	sortableInit();
</script>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
	<thead>
		<tr>
			<th></th>
			<th>カテゴリ名</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["article_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["article_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_article_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["article_category"]->key => $_smarty_tpl->tpl_vars["article_category"]->value) {
$_smarty_tpl->tpl_vars["article_category"]->_loop = true;
?>
		<tr id="<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
">
			<td class="pos_ac pos_vm move_i"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mode'])===null||$tmp==='' ? '' : $tmp)=="search") {?>☓<?php } else { ?><i class="fa fa-r fa-sort"><span></span></i><?php }?></td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['article_category']->value['name'];?>
</a></td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
"<?php if ($_smarty_tpl->tpl_vars['article_category']->value['display_flg']==1) {?> checked<?php }?>>
						<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['article_category']->value['id_article_category'];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["article_category"]->_loop) {
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
