<?php /* Smarty version Smarty-3.1.18, created on 2020-01-28 10:42:33
         compiled from "/home/tag-school/www/admin/contents/member/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6828573655e05e45278fb22-94726547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c7efecac6cb2715f186aef1bbe565870ffa156' => 
    array (
      0 => '/home/tag-school/www/admin/contents/member/template/form.tpl',
      1 => 1580175441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6828573655e05e45278fb22-94726547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e05e452894d07_29098609',
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionReferer' => 0,
    'OptionYesNo' => 0,
    '_CONTENTS_ID' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e05e452894d07_29098609')) {function content_5e05e452894d07_29098609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
if (!is_callable('smarty_function_html_radios')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_radios.php';
?><form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">お名前</label>
			<div class="col-sm-3">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name1'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</p><?php }?>
				<input type="text" class="form-control" name="name1" id="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
				<input type="text" class="form-control" name="name2" id="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">フリガナ</label>
			<div class="col-sm-3">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</p><?php }?>
				<input type="text" class="form-control" name="ruby1" id="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
				<input type="text" class="form-control" name="ruby2" id="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">郵便番号</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['zip'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>
</p><?php }?>
				<input type="text" style="width:200px;" class="form-control input-s" name="zip" id="zip" size="8" maxlength="8" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から住所を表示する</a>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">都道府県</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>
</p><?php }?>
				<style>.w200{width:200px;}</style>
				<?php echo smarty_function_html_select_ken(array('name'=>"prefecture",'class'=>"form-control inline input-s w200",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">市区町村</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['address1'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address1'];?>
</p><?php }?>
				<input type="text" class="form-control" name="address1" id="address1"  size="60" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address1'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">番地 / 建物・マンション名</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['address2'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address2'];?>
</p><?php }?>
				<input type="text" class="form-control" name="address2" id="address2"  size="60" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address2'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-3">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
				<input type="tel" class="form-control" name="tel" id="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">メールアドレス</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
				<input type="mail" class="form-control" name="mail" id="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">パスワード ※変更する場合に入力</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
				<span class="c_red">
					※パスワード<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['password'])) {?>設定済みです<?php } else { ?>未設定です<?php }?>
				</span>
				<input type="password" class="form-control" name="password" id="password" value="" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">どこからの登録か</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['referer'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['referer'];?>
</p><?php }?>
				<?php echo smarty_function_html_radios(array('name'=>"referer",'options'=>$_smarty_tpl->tpl_vars['OptionReferer']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['referer'])===null||$tmp==='' ? 1 : $tmp),'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">メールマガジン希望</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail_magazine_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail_magazine_flg'];?>
</p><?php }?>
				<?php echo smarty_function_html_radios(array('name'=>"mail_magazine_flg",'options'=>$_smarty_tpl->tpl_vars['OptionYesNo']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail_magazine_flg'])===null||$tmp==='' ? 0 : $tmp),'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['delete_flg']==1) {?>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">退会希望</label>
			<div class="col-sm-6">
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['delete_flg'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['delete_flg'];?>
</p><?php }?>
				<?php echo smarty_function_html_radios(array('name'=>"delete_flg",'options'=>$_smarty_tpl->tpl_vars['OptionYesNo']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['delete_flg'])===null||$tmp==='' ? 0 : $tmp),'separator'=>'&nbsp;'),$_smarty_tpl);?>

			</div>
		</div>
		<?php }?>
		<div class="hr-line-dashed"></div>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" /><?php }?>
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				<button class="btn btn-primary"  type="submit">この内容で登録</button>
			</div>
		</div>
	</div>
</form><?php }} ?>
