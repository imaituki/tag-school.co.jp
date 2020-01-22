<?php /* Smarty version Smarty-3.1.18, created on 2020-01-20 17:39:18
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11905011805e16fae2a44932-58551533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579509550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11905011805e16fae2a44932-58551533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e16fae2a8a361_54304602',
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
<?php if ($_valid && !is_callable('content_5e16fae2a8a361_54304602')) {function content_5e16fae2a8a361_54304602($_smarty_tpl) {?><!DOCTYPE html>
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
					<h2 class="hl"><img src="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/image/content/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/title.png" alt="会員登録" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<p>メールアドレス</p>
									<p>
										※確認のため、登録されたメールアドレスをご入力ください。<br />
										※メールアドレスを誤って入力された場合は退会処理ができませんのでご注意ください。
									</p>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
									<input type="text" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" placeholder="メールアドレス" />
									<p><input type="submit" class="btn_1 mb10" value="入力内容確認"></p>
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
