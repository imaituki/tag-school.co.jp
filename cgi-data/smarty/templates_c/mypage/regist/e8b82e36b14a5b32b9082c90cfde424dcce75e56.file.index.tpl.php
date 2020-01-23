<?php /* Smarty version Smarty-3.1.18, created on 2020-01-23 17:02:53
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5034095455e1598a1b425e2-52814797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579766569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5034095455e1598a1b425e2-52814797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e1598a1b80ff8_30018489',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'message' => 0,
    'member' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e1598a1b80ff8_30018489')) {function content_5e1598a1b80ff8_30018489($_smarty_tpl) {?><!DOCTYPE html>
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
									<?php if (empty($_smarty_tpl->tpl_vars['arr_post']->value['user'])) {?>
										<p>メールアドレス</p>
										<p>
											※tag-school.co.jpからのメールを受け取れるよう設定をお願いいたします。<br />
											※メールアドレスを誤って登録された場合は受付ができませんのでご注意ください。
										</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
										<input type="text" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" placeholder="メールアドレス" />
									<?php } else { ?>
										<p>メールアドレス</p>
										<p><?php echo $_smarty_tpl->tpl_vars['member']->value['mail'];?>
</p>
										<input type="hidden" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['mail'];?>
" placeholder="メールアドレス" />
										<p>パスワード</p>
										<p>パスワードは<span class="c_red">半角英数8文字以上32字以下</span>で入力してください。</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['password'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
										<input type="password" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" placeholder="パスワード" />
										<p>パスワード(確認用)</p>
										<input type="password" id="chk_password" name="chk_password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" placeholder="パスワード" />
										<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['id_member'];?>
" />
										<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['user'];?>
" />
									<?php }?>
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
