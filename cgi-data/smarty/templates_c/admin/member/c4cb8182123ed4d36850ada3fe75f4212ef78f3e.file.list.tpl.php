<?php /* Smarty version Smarty-3.1.18, created on 2020-01-20 19:44:20
         compiled from "/home/tag-school/www/admin/contents/member/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4378087245e05e44acff2a1-77067237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4cb8182123ed4d36850ada3fe75f4212ef78f3e' => 
    array (
      0 => '/home/tag-school/www/admin/contents/member/template/list.tpl',
      1 => 1579517027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4378087245e05e44acff2a1-77067237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e05e44ad2c909_35165434',
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_member' => 0,
    'member' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e05e44ad2c909_35165434')) {function content_5e05e44ad2c909_35165434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th>登録状況</th>
			<th>登録日</th>
			<th>お名前</th>
			<th>Eメールアドレス</th>
			<th>メルマガ希望</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["member"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["member"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_member']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["member"]->key => $_smarty_tpl->tpl_vars["member"]->value) {
$_smarty_tpl->tpl_vars["member"]->_loop = true;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['member']->value['delete_flg']==1) {?>style="background:#BBBBBB;"<?php }?>>
			<td>
				<?php if (empty($_smarty_tpl->tpl_vars['member']->value['password'])) {?>
					<span style="color:#0393B5;">仮登録</span>
				<?php } else { ?>
					本登録
				<?php }?>
			</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['entry_date'],'%Y/%m/%d %H:%M:%S');?>
</td>
			<td>
				<a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['member']->value['id_member'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['member']->value['delete_flg']==1) {?>【退会】<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['member']->value['name1'])||!empty($_smarty_tpl->tpl_vars['member']->value['name2'])) {?>
						<?php echo $_smarty_tpl->tpl_vars['member']->value['name1'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['member']->value['name2'];?>
&nbsp;
					<?php } else { ?>
						氏名未登録
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['member']->value['ruby1'])||!empty($_smarty_tpl->tpl_vars['member']->value['ruby2'])) {?>
						(<?php echo $_smarty_tpl->tpl_vars['member']->value['ruby1'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['member']->value['ruby2'];?>
)
					<?php }?>
				</a>
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['member']->value['mail'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['member']->value['mail_magazine_flg']==1) {?>希望<?php } else { ?>-<?php }?></td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['member']->value['id_member'];?>
">削除</a>
			</td>
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["member"]->_loop) {
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
<div id="blueimp-gallery" class="blueimp-gallery">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
