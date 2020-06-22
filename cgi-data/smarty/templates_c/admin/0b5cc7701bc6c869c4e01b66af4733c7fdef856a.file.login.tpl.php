<?php /* Smarty version Smarty-3.1.18, created on 2020-06-18 22:43:13
         compiled from "login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263700055eeb6f1ba965b9-97511171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5cc7701bc6c869c4e01b66af4733c7fdef856a' => 
    array (
      0 => 'login.tpl',
      1 => 1592487791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263700055eeb6f1ba965b9-97511171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eeb6f1baac7f7_75512921',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'message' => 0,
    'arr_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eeb6f1baac7f7_75512921')) {function content_5eeb6f1baac7f7_75512921($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>管理画面</title>
		<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/import.css" rel="stylesheet" />
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/lightbox/import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/list.js"></script>
	</head>
	<body id="login" class="pace-done">
		<div id="body">
			<div id="login_area">
				<div class="container center_view max_w400">
					<div class="row">
						<header class="message_text">
							<h1 class="large f_bold"><span>管理画面</span></h1>
						</header>
						<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?><div class="error_txt">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng'];?>
</div><?php }?>
						<form class="form-horizontal" action="" method="post">
							<div id="user_id" class="mb10">
								 <input type="text" class="form-control" name="account" id="account" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['account'])===null||$tmp==='' ? '' : $tmp);?>
" maxlength="255" placeholder="アカウント名" />
							</div>
							<div id="pass">
								<input type="password" class="form-control" name="password" id="password" value="" maxlength="255" placeholder="パスワード" />
							</div>
							<div class="button">
								<button>ログイン</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>
