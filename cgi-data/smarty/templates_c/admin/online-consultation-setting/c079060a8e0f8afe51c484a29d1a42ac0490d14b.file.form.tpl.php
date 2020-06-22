<?php /* Smarty version Smarty-3.1.18, created on 2020-06-10 18:42:19
         compiled from "/home/tag-school/www/admin/contents/online-consultation-setting/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17540498625ee0aafb04c2d7-43716019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c079060a8e0f8afe51c484a29d1a42ac0490d14b' => 
    array (
      0 => '/home/tag-school/www/admin/contents/online-consultation-setting/template/form.tpl',
      1 => 1591780860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17540498625ee0aafb04c2d7-43716019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ee0aafb07d014_67166604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee0aafb07d014_67166604')) {function content_5ee0aafb07d014_67166604($_smarty_tpl) {?><form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" name="formField" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?><div id="msg" class="ok mb20"><?php echo $_smarty_tpl->tpl_vars['message']->value['ok'];?>
</div><?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['limit'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['limit'];?>
</p><?php }?>
		<div class="hr-line-dashed"></div>
		<ul class="row">
			<li class="col-sm-12">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['max_number'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['max_number'];?>
</p><?php }?>
				<span class="first">同時刻の予約数上限</span>
				<span class="second"><input class="form-control w70" type="number" name="max_number" id="max_number" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['max_number'];?>
" min="1" step="1" style="display:inline-block"> 人まで</span>
				<div class="hr-line-dashed"></div>
			</li>
			<li class="col-sm-12">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mid_number'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mid_number'];?>
</p><?php }?>
				<span class="first">△を表示する予約数</span>
				<span class="second"><input class="form-control w70" type="number" name="mid_number" id="mid_number" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mid_number'];?>
" min="0" step="1" style="display:inline-block"> 人の時に表示<br>
				<p>（※「△」マークを利用しない場合は0人にして下さい）</p></span>
				<div class="hr-line-dashed"></div>
			</li>
	
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
		<input type="hidden" name="id_online_consultation_setting" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_online_consultation_setting'];?>
" />
		<?php }?>
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				<div class="save-btn inline">
					<a class="btn btn-primary" href="javascript:void(0);" onclick="document.formField.submit();">
						この内容で登録
					</a>
				</div>

			</div>
		</div>
	</div>
</form>

<script>
</script>
<style>
.wrapper-content-main-form > ul > li { margin-bottom:0; }
</style>

<?php }} ?>
