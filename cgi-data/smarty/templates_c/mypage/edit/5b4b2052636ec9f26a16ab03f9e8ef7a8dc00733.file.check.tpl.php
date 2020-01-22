<?php /* Smarty version Smarty-3.1.18, created on 2020-01-10 18:46:59
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6645184085e16e5f5be6279-80524954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1578649618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6645184085e16e5f5be6279-80524954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e16e5f5c4c3c0_33599976',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e16e5f5c4c3c0_33599976')) {function content_5e16e5f5c4c3c0_33599976($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
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
/title.png" alt="会員情報編集" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="send.php" method="post">
									<div>
										<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

										<input type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
									</div>
									<div>
										<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['password'])) {?>
											************
											<input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" />
										<?php }?>
									</div>
									<div>
										<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>

										<input type="hidden" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
" />
										<input type="hidden" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
" />
									</div>
									<div>
										<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>

										<input type="hidden" name="ruby1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
" />
										<input type="hidden" name="ruby2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
" />
									</div>
									<div>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '未入力' : $tmp);?>

										<input type="hidden" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" />
									</div>
									<div>
									</div>
									<div>
										<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['zip'])) {?><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
&nbsp;<?php }?>
										<?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>1),$_smarty_tpl);?>
<br />
										<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>

										<input type="hidden" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
" />
										<input type="hidden" name="prefecture" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['prefecture'];?>
" />
										<input type="hidden" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
" />
										<input type="hidden" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>
" />
									</div>
									<div>
										<input type="hidden" name="first_flg" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['first_flg'])===null||$tmp==='' ? 0 : $tmp);?>
" />
										<input type="submit" class="btn_1" onclick="this.form.action='./'" value="戻る" />
										<input type="submit" class="btn_1 mb10" value="保存" />
									</div>
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
