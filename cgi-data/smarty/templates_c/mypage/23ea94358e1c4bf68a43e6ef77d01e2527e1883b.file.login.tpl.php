<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 11:23:39
         compiled from "./login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15303863695e153c1f9046c5-48444019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ea94358e1c4bf68a43e6ef77d01e2527e1883b' => 
    array (
      0 => './login.tpl',
      1 => 1579225204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15303863695e153c1f9046c5-48444019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e153c1f94a0e1_49048251',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    'message' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e153c1f94a0e1_49048251')) {function content_5e153c1f94a0e1_49048251($_smarty_tpl) {?><!DOCTYPE html>
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
					<h2 class="hl">マイページ</h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div class="wrap">
									<div class="box2">
										<div class="box2_contents">
											<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['error'];?>
</p><?php }?>
											<form action="login.php<?php if ($_smarty_tpl->tpl_vars['arr_get']->value['mode']!=null) {?>?mode=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['mode'];?>
<?php }?>" method="post">
												<div id="msg" class="pos_ac c_red"></div>
												<p>メールアドレス</p>
												<input type="text" id="mail" name="mail" value="" placeholder="メールアドレス" />
												<p>パスワード</p>
												<input type="password" id="password" name="password" value="" placeholder="パスワード" />
												<p><input type="submit" name="login" class="btn_1 mb10" value="ログイン"></p>
												<p class="pos-ac"><a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/reissue/">パスワードを忘れた方</a></p>
											</form>
											<p>
												※ログインできないときは<br />
												・メールアドレスまたはパスワードが間違っている<br />
												・仮パスワードの有効期限(発行から24時間)が切れている
											</p>
										</div>
									</div>
									<p class="mt-40">
										<a  class="btn_2" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/regist/">新規会員登録はこちら</a>
									</p>
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
