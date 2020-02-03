<?php /* Smarty version Smarty-3.1.18, created on 2020-01-31 13:38:13
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936279875e29593be2ca48-49802375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1580445487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '936279875e29593be2ca48-49802375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e29593beb9d86_57770006',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_FRONT' => 0,
    '_HTML_HEADER' => 0,
    'message' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e29593beb9d86_57770006')) {function content_5e29593beb9d86_57770006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/">28 マイページ</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 id="form" class="hl_3 mincho"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</h2>
				<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['succeed'])) {?>
					<div class="success" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value['succeed'];?>
</div>
				<?php } elseif (!empty($_smarty_tpl->tpl_vars['message']->value['fail'])) {?>
					<div class="error" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value['fail'];?>
</div>
				<?php }?>
				<form class="mb30" action="check.php" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
									<input type="text" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" placeholder="Eメールアドレス" />
								</td>
							</tr>
							<tr>
								<th scope="row">パスワード</th>
								<td>
									<p class="c_red">
										※空欄の場合は変更されません。<br />
										※8文字から32文字で入力してください。
									</p>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['password'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
									<input type="password" id="password" name="password" value="" placeholder="パスワード" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</p><?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</p><?php }?>
									<input type="text" id="name1" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
" placeholder="お名前(姓)" />
									<input type="text" id="name2" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
" placeholder="お名前(名)" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前フリガナ</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</p><?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'];?>
</p><?php }?>
									<input type="text" id="ruby1" name="ruby1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
" placeholder="お名前フリガナ(姓)" />
									<input type="text" id="ruby2" name="ruby2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
" placeholder="お名前フリガナ(名)" />
								</td>
							</tr>
							<tr>
								<th scope="row">電話番号</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</p><?php }?>
									<input type="tel" id="tel" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" placeholder="電話番号" />
								</td>
							</tr>
							<tr>
								<th scope="row">郵便番号</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['zip'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>
</p><?php }?>
									<input type="text" id="zip" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
" placeholder="000-0000" />
									<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block">
										<i class="fa fa-search" aria-hidden="true"></i>郵便番号から住所を自動入力する
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">都道府県</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>
</p><?php }?>
									<?php echo smarty_function_html_select_ken(array('name'=>"prefecture",'class'=>"form-control inline input-s",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

								</td>
							</tr>
							<tr class="last">
								<th scope="row">住所</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address1'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address1'];?>
</p><?php }?>
									<input type="text" id="address1" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
" placeholder="市区町村" />
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address2'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address2'];?>
</p><?php }?>
									<input type="text" id="address2" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>
" placeholder="番地 / 建物・マンション名" />
								</td>
							</tr>
						</tbody>
					</table>
					<div class="pos_ac form_button">
						<button class="button" type="submit">入力内容確認<i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
