<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 17:42:05
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9932258365e280add2d6f40-14070391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1579681666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9932258365e280add2d6f40-14070391',
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
    'arr_post' => 0,
    'OptionGrade' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e280add32b328_49422296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e280add32b328_49422296')) {function content_5e280add32b328_49422296($_smarty_tpl) {?><!DOCTYPE html>
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
					<h2 class="hl">お問い合わせ 確認</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<table>
										<tr>
											<th>生徒氏名</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>生徒氏名(フリガナ)</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>学年</th>
											<td>
												<?php echo $_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']];?>

												<input type="hidden" name="grade" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['grade'];?>
" />
											</td>
										</tr>
										<tr>
											<th>保護者氏名</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>保護者氏名(フリガナ)</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>入塾希望理由</th>
											<td>
												<?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['reason']);?>

												<input type="hidden" name="reason" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reason'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>Eメールアドレス</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>住所</th>
											<td>
												<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>

												<input type="hidden" name="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>備考</th>
											<td>
												<?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']);?>

												<input type="hidden" name="comment" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
									</table>
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
