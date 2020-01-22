<?php /* Smarty version Smarty-3.1.18, created on 2020-01-21 19:43:44
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7049183775e26d5e01b3869-32464001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579603128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7049183775e26d5e01b3869-32464001',
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
    'message' => 0,
    'arr_post' => 0,
    'OptionGrade' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e26d5e0270789_28076629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e26d5e0270789_28076629')) {function content_5e26d5e0270789_28076629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
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
								<form action="check.php" method="post">
									<table>
										<tr>
											<th>生徒氏名</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name1'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</span><?php }?>
												<input type="text" name="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>生徒氏名(フリガナ)</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</span><?php }?>
												<input type="text" name="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>学年</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['grade'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['grade'];?>
</span><?php }?>
												<select name="grade">
													<option value="">選択してください。</option>
													<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionGrade']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['grade']),$_smarty_tpl);?>

												</select>
											</td>
										</tr>
										<tr>
											<th>保護者氏名</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name2'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</span><?php }?>
												<input type="text" name="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>保護者氏名(フリガナ)</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'];?>
</span><?php }?>
												<input type="text" name="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>入塾希望理由</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['reason'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['reason'];?>
</span><?php }?>
												<textarea name="reason"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reason'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
											</td>
										</tr>
										<tr>
											<th>Eメールアドレス</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</span><?php }?>
												<input type="email" name="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</span><?php }?>
												<input type="tel" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>住所</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address'];?>
</span><?php }?>
												<input type="text" name="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</td>
										</tr>
										<tr>
											<th>備考</th>
											<td>
												<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment'])) {?><span class="c_red">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</span><?php }?>
												<textarea name="comment"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
											</td>
										</tr>
									</table>
									<p><input type="submit" class="btn_1 mb10" value="入力内容確認" onclick="this.form.action='./check.php'" /></p>
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
