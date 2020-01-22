<?php /* Smarty version Smarty-3.1.18, created on 2020-01-10 18:43:52
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20372745395e152f1d61c9a1-18059401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1578646860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20372745395e152f1d61c9a1-18059401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e152f1d655a95_91202170',
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
<?php if ($_valid && !is_callable('content_5e152f1d655a95_91202170')) {function content_5e152f1d655a95_91202170($_smarty_tpl) {?><!DOCTYPE html>
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
/title.png" alt="マイページ" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div class="row">
									<div class="col-md-3">
										<div class="unit">
											<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/article/">
												<p class="image pos_ac"><i class="fa fa-book" aria-hidden="true"></i></p>
												<p class="text pos_ac">ブログ</p>
											</a>
										</div>
									</div>
									<div class="col-md-3">
											<div class="unit">
												<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/edit/">
													<p class="image pos_ac"><i class="fa fa-id-card" aria-hidden="true"></i></p>
													<p class="text pos_ac">会員情報編集</p>
												</a>
											</div>
										</div>
									<div class="col-md-3">
										<div class="unit">
											<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/unsubscribe/">
												<p class="image pos_ac"><i class="fa fa-id-card" aria-hidden="true"></i></p>
												<p class="text pos_ac">退会</p>
											</a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="unit">
											<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/logout.php">
												<p class="image pos_ac"><i class="fa fa-sign-out" aria-hidden="true"></i></p>
												<p class="text pos_ac">ログアウト</p>
											</a>
										</div>
									</div>
								</div>
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
