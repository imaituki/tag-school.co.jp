<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 19:00:39
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079833935e16d5ed4fb8d9-38944288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579255234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3079833935e16d5ed4fb8d9-38944288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e16d5ed5dea24_85672898',
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
<?php if ($_valid && !is_callable('content_5e16d5ed5dea24_85672898')) {function content_5e16d5ed5dea24_85672898($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
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

		<script type="text/javascript" charset="UTF-8" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
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
							<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['succeed'])) {?>
								<div id="succeed"><?php echo $_smarty_tpl->tpl_vars['message']->value['succeed'];?>
</div>
							<?php } elseif (!empty($_smarty_tpl->tpl_vars['message']->value['fail'])) {?>
								<div id="fail"><?php echo $_smarty_tpl->tpl_vars['message']->value['fail'];?>
</div>
							<?php }?>
							<section class="style-mypage-list">
								<form action="check.php" method="post">
									<div>
										<p>メールアドレス</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
										<input type="text" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" placeholder="メールアドレス" />
									</div>
									<div>
										<p>パスワード(空欄の場合は変更なし)</p>
										<p class="error">※注: 確認画面から入力画面に戻った場合、入力したパスワードは保持されませんのでご注意ください。</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['password'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
										<input type="password" id="password" name="password" value="" placeholder="パスワード" />
									</div>
									<div>
										<p>お名前</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</p><?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</p><?php }?>
										<input type="text" id="name1" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
" placeholder="お名前(姓)" />
										<input type="text" id="name2" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
" placeholder="お名前(名)" />
									</div>
									<div>
										<p>フリガナ</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</p><?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'];?>
</p><?php }?>
										<input type="text" id="ruby1" name="ruby1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
" placeholder="フリガナ(姓)" />
										<input type="text" id="ruby2" name="ruby2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
" placeholder="フリガナ(名)" />
									</div>
									<div>
										<p>電話番号</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
										<input type="text" id="tel" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" placeholder="電話番号" />
									</div>
									<div>
										<p>郵便番号</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['zip'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>
</p><?php }?>
										<input type="text" id="zip" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
" placeholder="郵便番号" />
										<button type="button" onclick="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から住所を自動入力する</button>
									</div>
									<div>
										<p>都道府県</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>
</p><?php }?>
										<select name="prefecture" >
											<?php echo smarty_function_html_select_ken(array('selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

										</select>
									</div>
									<div>
										<p>住所</p>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address1'];?>
</p><?php }?>
										<input type="text" id="address1" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
" placeholder="市区町村" />
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address2'];?>
</p><?php }?>
										<input type="text" id="address2" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>
" placeholder="番地 / 建物・マンション名" />
									</div>
									<div>
										<input type="hidden" name="first_flg" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['first_flg'])===null||$tmp==='' ? 0 : $tmp);?>
" />
										<input type="submit" class="btn_1 mb10" value="入力内容確認" />
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
