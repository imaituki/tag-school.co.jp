<?php /* Smarty version Smarty-3.1.18, created on 2020-06-30 16:47:15
         compiled from "/home/tag-school/www/admin/contents/online-consultation2/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12433908865ef9647c88f024-83862627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1184ffd8b92d729f2c7d8064c00bb30f418bf865' => 
    array (
      0 => '/home/tag-school/www/admin/contents/online-consultation2/template/form.tpl',
      1 => 1593501958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12433908865ef9647c88f024-83862627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef9647c952c49_93440123',
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionReserveTime' => 0,
    'OptionTeacher' => 0,
    'OptionSex' => 0,
    'OptionGrade' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef9647c952c49_93440123')) {function content_5ef9647c952c49_93440123($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_checkboxes.php';
?><form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" name="formField" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?><div class="ok mb20"><?php echo $_smarty_tpl->tpl_vars['message']->value['ok'];?>
</div><?php }?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['limit'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['limit'];?>
</p><?php }?>
		<div class="form-group required">
			<label class="col-sm-2 control-label">予約日</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['date'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date'];?>
</p><?php }?>
				<div class="input-daterange input-group dis_it pos_vm" id="datepicker">
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					<input type="text" class="input-sm datepicker form-control mt0" name="date" id="date" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['date'])===null||$tmp==='' ? '' : $tmp);?>
" readonly>
					<select name="time" class="selectpicker form-control">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionReserveTime']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['time']),$_smarty_tpl);?>

					</select>
				</div>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">申込日時</label>
			<div class="col-sm-6">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['entry_date'],"%Y&#24180;%m&#26376;%d&#26085; %H:%M:%S");?>

					<input type="hidden" name="entry_date" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['entry_date'])===null||$tmp==='' ? '' : $tmp);?>
">
				<?php } else { ?>
					自動保存
				<?php }?>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">担当講師</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['teacher'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['teacher'];?>
</p><?php }?>
				<select name="teacher" class="form-control">
					<option value="">選択してください。</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionTeacher']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['teacher']),$_smarty_tpl);?>

				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">保護者氏名</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name2'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</p><?php }?>
				<input type="text" class="form-control" name="name2" id="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">保護者氏名(フリガナ)</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'];?>
</p><?php }?>
				<input type="text" class="form-control" name="ruby2" id="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">Eメールアドレス</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
				<input type="text" class="form-control" name="mail" id="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
				<input type="text" class="form-control" name="tel" id="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">住所</label>
			<div class="col-sm-6">
				〒<input type="text" name="zip" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');">郵便番号から住所を表示する</a><br />
				<select name="prefecture" id="prefecture" class="form-control">
					<?php echo smarty_function_html_select_ken(array('str_default'=>"選択してください",'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']),$_smarty_tpl);?>

				</select><br />
				<input type="text" name="address" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">児童・生徒氏名</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name1'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</p><?php }?>
				<input type="text" class="form-control" name="name1" id="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">児童・生徒氏名(フリガナ)</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</p><?php }?>
				<input type="text" class="form-control" name="ruby1" id="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">性別</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['sex'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['sex'];?>
</p><?php }?>
				<select name="sex" class="form-control">
					<option value="">選択してください。</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionSex']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['sex']),$_smarty_tpl);?>

				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">学年</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['grade'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['grade'];?>
</p><?php }?>
				<select name="grade" class="form-control">
					<option value="">選択してください。</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionGrade']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['grade']),$_smarty_tpl);?>

				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">面談で相談したい内容</label>
			<div class="col-sm-9">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['comment'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</p><?php }?>
				<textarea type="text" class="form-control" name="comment" id="comment" rows="7"/><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
		<div class="form-group">
			<label class="col-sm-2 control-label">キャンセルする</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['cancel_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['cancel_flg'];?>
</p><?php }?>
				<?php echo smarty_function_html_checkboxes(array('name'=>"cancel_flg",'values'=>"1",'output'=>"キャンセル",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['cancel_flg'])===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
		<input type="hidden" name="id_online_consultation" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_online_consultation'];?>
" />
		<?php }?>
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
				<div class="delete-link inline">
					<a class="btn btn-danger" href="./delete.php?id=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_online_consultation'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date'];?>
" id="delete_online_consultation" data-id="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_online_consultation'];?>
">
						この予約を削除
					</a>
				</div>
				<?php }?>
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
	$("#delete_online_consultation").click(function(){
		var id_online_consultation = $(this).attr("data-id");
		if( !confirm("この予約を削除します。元に戻せません。本当に削除しますか。") ){
			return false;
		}else{
			$.ajax({
				url: "delete.php",
				type: "GET",
				date: { id: id_online_consultation }
			});
		}
	});
</script>
<style>
.wrapper-content-main-form > ul > li { margin-bottom:0; }
</style>

<?php }} ?>
