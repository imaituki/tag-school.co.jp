<?php /* Smarty version Smarty-3.1.18, created on 2020-06-19 17:53:16
         compiled from "/home/tag-school/www/admin/contents/staff/template/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19598577045eeb67574a41a9-73827478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9301fabfcbf33b58844852c94bce9b1259b6537e' => 
    array (
      0 => '/home/tag-school/www/admin/contents/staff/template/form.tpl',
      1 => 1592486772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19598577045eeb67574a41a9-73827478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eeb67574d4a10_14609769',
  'variables' => 
  array (
    'mode' => 0,
    'message' => 0,
    'arr_post' => 0,
    '_CONTENTS_DIR' => 0,
    '_CONTENTS_CONF_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eeb67574d4a10_14609769')) {function content_5eeb67574d4a10_14609769($_smarty_tpl) {?>			<form class="form-horizontal" action="./<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>update<?php } else { ?>insert<?php }?>.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">名前</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['name'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</p><?php }?>
							<input type="text" class="form-control" name="name" id="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">ログインID</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['account'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['account'];?>
</p><?php }?>
							<input type="text" class="form-control" name="account" id="account" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['account'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">パスワード</label>
						<div class="col-sm-6">
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
							<input type="text" class="form-control" name="password" id="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
					<input type="hidden" name="id_staff" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id_staff'];?>
" />
					<input type="hidden" name="registed_account" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['registed_account'];?>
" />
					<?php }?>
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_CONF_PATH']->value;?>
" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary" type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
<?php }} ?>
