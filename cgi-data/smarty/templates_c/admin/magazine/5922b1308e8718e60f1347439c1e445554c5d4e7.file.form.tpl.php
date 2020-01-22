<?php /* Smarty version Smarty-3.1.18, created on 2020-01-06 17:53:59
         compiled from "/home/tag-school/www/admin/contents/magazine/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3485828615e12ec41e83401-19931285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5922b1308e8718e60f1347439c1e445554c5d4e7' => 
    array (
      0 => '/home/tag-school/www/admin/contents/magazine/template/form.tpl',
      1 => 1578300836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3485828615e12ec41e83401-19931285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e12ec4207b920_64070963',
  'variables' => 
  array (
    'message' => 0,
    'arr_post' => 0,
    'mode' => 0,
    '_CONTENTS_ID' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e12ec4207b920_64070963')) {function content_5e12ec4207b920_64070963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_radios.php';
?><form id="inputForm" name="inputForm" class="form-horizontal" action="./preview.php?preview=1" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">タイトル(件名)</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['title'];?>
</p><?php }?>
				<input type="text" class="form-control" name="title" id="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ヘッダー </label>
			<div class="col-sm-9">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['header'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['header'];?>
</p><?php }?>
				<textarea name="header" id="header" rows="7" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['header'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-9">〇〇〇〇様</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">本文 </label>
			<div class="col-sm-9">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['main'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['main'];?>
</p><?php }?>
				<textarea name="main" id="main" rows="20" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['main'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">フッター </label>
			<div class="col-sm-9">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['footer'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['footer'];?>
</p><?php }?>
				<textarea name="footer" id="footer" rows="7" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['footer'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">送信・保存設定</label>
			<div class="col-sm-6">
				<p>この内容で配信する場合は「次回の送信に設定する」にチェックしてください(チェック後でも送信前なら編集できます)</p>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['post_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['post_flg'];?>
</p><?php }?>
				<div class="radio m-r-xs inline">
					<?php echo smarty_function_html_radios(array('name'=>"post_flg",'values'=>0,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['post_flg'])===null||$tmp==='' ? 0 : $tmp),'output'=>"下書き保存"),$_smarty_tpl);?>
&nbsp;&nbsp;
					<?php echo smarty_function_html_radios(array('name'=>"post_flg",'values'=>1,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['post_flg'])===null||$tmp==='' ? 0 : $tmp),'output'=>"次回の送信に設定する"),$_smarty_tpl);?>

				</div>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="button clearfix mb20">
			<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" /><?php }?>
			<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
			<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
			<div class="form-group">
				
				<div class="fl_right">
					<input type="button" class="btn btn-primary" value="この内容で登録" id="<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>updateBtn<?php } else { ?>insertBtn<?php }?>" />
				</div>
			</div>
		</div>
	</div>
</form>

<?php }} ?>
