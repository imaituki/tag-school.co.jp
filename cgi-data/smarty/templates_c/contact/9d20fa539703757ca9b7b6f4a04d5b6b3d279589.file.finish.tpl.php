<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 17:49:03
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4452313715e280c7f661db3-64215070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1579681669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4452313715e280c7f661db3-64215070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e280c7f685596_92242451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e280c7f685596_92242451')) {function content_5e280c7f685596_92242451($_smarty_tpl) {?><!DOCTYPE html>
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
					<h2 class="hl"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['temp_var'])) {?>
									<p>仮登録を行いました。</p>
									<p>
										My Page会員に仮登録いただき、ありがとうございます。<br />
										まだ登録は完了しておりません。<br />
										<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
宛てに自動送信メールをお送りしました。<br />
										本登録用のURLをお送りいたしましたので、そちらから本登録を完了してください。
									</p>
								<?php } else { ?>
									<p>本登録を行いました。</p>
									<p>
										My Page会員に本登録いただき、ありがとうございます。<br />
										ご登録いただいたメールアドレスとパスワードで、マイページにログインしてください。
									</p>
									<p><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php">マイページ ログイン</a></p>
								<?php }?>
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
