<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 18:54:16
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12499426595e183da23a7a03-43813989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1579254324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12499426595e183da23a7a03-43813989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e183da23c9257_01851830',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e183da23c9257_01851830')) {function content_5e183da23c9257_01851830($_smarty_tpl) {?><!DOCTYPE html>
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
/title.png" alt="パスワード再発行" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<p>パスワードの再発行を受付けました。</p>
									<p>
										仮パスワードを発行いたしましたので、マイページにログインした後、パスワードの再設定を行ってください。
									</p>
									<p><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/">マイページ</a></p>
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
