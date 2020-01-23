<?php /* Smarty version Smarty-3.1.18, created on 2020-01-23 16:30:10
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4062752445e1598af2eb186-38858781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1579680203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4062752445e1598af2eb186-38858781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e1598af32dd32_07562012',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    'message' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e1598af32dd32_07562012')) {function content_5e1598af32dd32_07562012($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/css/import.css" type="text/css" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/favicon/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/favicon/apple-touch-icon.png" />
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
" class="bottom">
		<a id="pagetop" name="pagetop"></a>
		<div id="base">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<section class="style--page_title">
			<div class="container">
				<div class="back">
					<h2 class="hl">会員登録確認</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['error'];?>
</p><?php }?>
								<form action="send.php" method="post">
									<p>メールアドレス</p>
									<p><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
</p>
									<input type="hidden" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
								<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['user'])) {?>
									<p>パスワード</p>
									<p>********</p>
									<input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" />
									<input type="hidden" name="chk_password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['chk_password'];?>
" />
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id'];?>
" />
									<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['user'];?>
" />
								<?php }?>
									<p><input type="submit" class="btn_1" onclick="this.form.action='./'" value="戻る"></p>
									<p><input type="submit" class="btn_1 mb10" onclick="this.form.action='./send.php'" value="送信"></p>
								</form>
							</section>
						</div>
					</div>
				</main>
			</div><!-- #body -->
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- #base -->
		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/js/import.js"></script>
	</body>
</html><?php }} ?>
