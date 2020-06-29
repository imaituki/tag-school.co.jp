<?php /* Smarty version Smarty-3.1.18, created on 2020-06-25 20:21:10
         compiled from "/home/tag-school/www/admin/contents/contact/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8700723675dfae137079bb9-86800230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2975322d3a6721cfa4b32dc0273b23311f028051' => 
    array (
      0 => '/home/tag-school/www/admin/contents/contact/template/list.tpl',
      1 => 1593084068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8700723675dfae137079bb9-86800230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5dfae1370ba069_83169319',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_contact' => 0,
    'data' => 0,
    'OptionContent' => 0,
    'OptionStatus' => 0,
    '_CONTENTS_ID' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfae1370ba069_83169319')) {function content_5dfae1370ba069_83169319($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th width="100">お問い合わせ<br />日時</th>
			<th width="100">お問い合わせ<br />項目</th>
			<th width="100">ステータス</th>
			<th>名前</th>
			<th width="100">メールアドレス</th>
			<th width="150">住所</th>
			<th width="100">電話番号</th>
			<th width="80">対応状況</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>お問い合わせ<br />日時</th>
			<th>お問い合わせ<br />項目</th>
			<th>ステータス</th>
			<th>名前</th>
			<th>メールアドレス</th>
			<th>住所</th>
			<th>電話番号</th>
			<th>対応状況</th>
			<th>削除</th>
		</tr>
	</tfoot>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['data']->value['check_flg']==1) {?>style="background-color: #dadada;"<?php }?>>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['entry_date'],"%Y/%m/%d %H:%M:%S");?>
</td>
			<td>
				<?php echo $_smarty_tpl->tpl_vars['OptionContent']->value[$_smarty_tpl->tpl_vars['data']->value['content']];?>
<br />
				(<a href="./export.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_contact'];?>
" target="_blank">ファーストコンタクトカード</a>)
			</td>
			<td><?php if ($_smarty_tpl->tpl_vars['data']->value['status']==0) {?>-<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['OptionStatus']->value[$_smarty_tpl->tpl_vars['data']->value['status']];?>
<?php }?></td>
			<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_contact'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name1'];?>
<br>(<?php echo $_smarty_tpl->tpl_vars['data']->value['ruby1'];?>
)</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['mail'];?>
</td>
			<td>〒<?php echo $_smarty_tpl->tpl_vars['data']->value['zip'];?>
<br><?php echo smarty_function_html_select_ken(array('selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['prefecture'])===null||$tmp==='' ? '' : $tmp),'pre'=>1),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['tel'];?>
</td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="check<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['check_flg']==1) {?> checked<?php }?>>
						<label class="onoffswitch-label" for="check<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_contact'];?>
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


<style>
	.onoffswitch-inner:before { content:'完了' !important; }
	.onoffswitch-inner:after  { content:'未完' !important; }
</style>
<?php }} ?>
