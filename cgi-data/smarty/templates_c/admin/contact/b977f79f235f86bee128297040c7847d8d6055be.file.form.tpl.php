<?php /* Smarty version Smarty-3.1.18, created on 2020-02-12 10:08:53
         compiled from "/home/tag-school/www/admin/contents/contact/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155323555e2a98544439a8-66619384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b977f79f235f86bee128297040c7847d8d6055be' => 
    array (
      0 => '/home/tag-school/www/admin/contents/contact/template/form.tpl',
      1 => 1581314475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155323555e2a98544439a8-66619384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2a985447e7f3_60537225',
  'variables' => 
  array (
    'OptionContent' => 0,
    'arr_post' => 0,
    'OptionGrade' => 0,
    'OptionRequest' => 0,
    'OptionContactReferer' => 0,
    'OptionStatus' => 0,
    'message' => 0,
    'mode' => 0,
    '_CONTENTS_ID' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2a985447e7f3_60537225')) {function content_5e2a985447e7f3_60537225($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><form id="inputForm" name="inputForm" class="form-horizontal" action="./preview.php?preview=1" method="post" enctype="multipart/form-data">
	<div class="ibox-content form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">お問い合わせ項目</label>
			<div class="col-sm-6">
				<?php echo smarty_function_html_radios(array('name'=>"content",'options'=>$_smarty_tpl->tpl_vars['OptionContent']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['content'],'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">生徒氏名</label>
			<div class="col-sm-6">
				<input type="text" name="name1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
" placeholder="漢字" /><br />
				<input type="text" name="ruby1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
" placeholder="フリガナ" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">学年</label>
			<div class="col-sm-6">
				<select name="grade">
					<option value="">選択してください。</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionGrade']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['grade']),$_smarty_tpl);?>

				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">希望項目</label>
			<div class="col-sm-6">
				<?php echo smarty_function_html_radios(array('name'=>"request",'options'=>$_smarty_tpl->tpl_vars['OptionRequest']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['request'],'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">入塾希望理由</label>
			<div class="col-sm-6">
				<textarea name="reason" class="form-control" style="min-height:100px;"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['reason'];?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">保護者氏名</label>
			<div class="col-sm-6">
				<input type="text" name="name2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
" /><br />
				<input type="text" name="ruby2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Eメールアドレス</label>
			<div class="col-sm-6">
				<input type="email" name="mail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-6">
				<input type="tel" name="tel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">住所</label>
			<div class="col-sm-6">
				〒<input type="text" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');">郵便番号から住所を表示する</a><br />
				<select name="prefecture" id="prefecture" class="form-control">
					<?php echo smarty_function_html_select_ken(array('str_default'=>"選択してください",'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']),$_smarty_tpl);?>

				</select><br />
				<input type="text" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">お問い合わせ内容</label>
			<div class="col-sm-6">
				<textarea name="comment" class="form-control"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">どこからのお問い合わせか</label>
			<div class="col-sm-6">
				<?php echo smarty_function_html_radios(array('name'=>"referer",'options'=>$_smarty_tpl->tpl_vars['OptionContactReferer']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['referer'],'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ステータス</label>
			<div class="col-sm-6">
				<select name="status">
					<option value="0">選択してください。</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionStatus']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['status']),$_smarty_tpl);?>

				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">備考</label>
			<div class="col-sm-6">
				<textarea name="memo" class="form-control" style="min-height:100px;><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['memo'];?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">対応状況</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['check_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['check_flg'];?>
</p><?php }?>
				<div class="radio m-r-xs inline">
					<?php echo smarty_function_html_radios(array('name'=>"check_flg",'values'=>1,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['check_flg'])===null||$tmp==='' ? "0" : $tmp),'output'=>"完了"),$_smarty_tpl);?>
&nbsp;&nbsp;
					<?php echo smarty_function_html_radios(array('name'=>"check_flg",'values'=>0,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['check_flg'])===null||$tmp==='' ? "0" : $tmp),'output'=>"未完"),$_smarty_tpl);?>

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
</form><?php }} ?>
