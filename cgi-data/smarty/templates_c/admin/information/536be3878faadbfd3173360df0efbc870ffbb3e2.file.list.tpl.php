<?php /* Smarty version Smarty-3.1.18, created on 2019-05-08 16:07:46
         compiled from "../template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13457839255cd28042e36e69-77872679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536be3878faadbfd3173360df0efbc870ffbb3e2' => 
    array (
      0 => '../template/list.tpl',
      1 => 1557295112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13457839255cd28042e36e69-77872679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    'arr_data' => 0,
    'data' => 0,
    '_CONTENTS_ID' => 0,
    '_ARR_IMAGE' => 0,
    'file' => 0,
    '_IMAGEFULLPATH' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd28042ee0048_72866544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd28042ee0048_72866544')) {function content_5cd28042ee0048_72866544($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jwcc/8034/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th>日付</th>
			<th>掲載期間</th>
			<th>タイトル</th>
			<th class="photo">写真</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="100">日付</th>
			<th width="100">掲載期間</th>
			<th>タイトル</th>
			<th class="photo" width="220">写真</th>
			<th class="showhide" width="60">表示</th>
			<th class="delete" width="60">削除</th>
		</tr>
	</tfoot>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		<tr<?php if ($_smarty_tpl->tpl_vars['data']->value['display_flg']==0||($_smarty_tpl->tpl_vars['data']->value['display_indefinite']==0&&(strtotime($_smarty_tpl->tpl_vars['data']->value['display_start'])>time()||strtotime($_smarty_tpl->tpl_vars['data']->value['display_end'])<time()))) {?> class="gray-bg"<?php }?>>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],"%Y/%m/%d");?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['data']->value['display_indefinite']==0) {?>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['display_start'],"%Y/%m/%d");?>
<br />
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['display_end'],"%Y/%m/%d");?>

				<?php } else { ?>
					無期限
				<?php }?>
			</td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></td>
			<td class="pos_al">
				<div class="lightBoxGallery">
					<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['file']['iteration']++;
?>
						<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['file']->value['name']]) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/l_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['file']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" rel="lightbox[]">
								<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/s_<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" width="50" />
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['file']['iteration']%3==0) {?><br /><?php }?>
					<?php } ?>
				</div>
			</td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['display_flg']==1) {?> checked<?php }?>>
						<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
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
