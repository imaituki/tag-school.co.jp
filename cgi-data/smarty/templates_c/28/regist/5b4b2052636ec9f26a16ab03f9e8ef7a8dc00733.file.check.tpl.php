<?php /* Smarty version Smarty-3.1.18, created on 2020-06-11 09:53:46
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10733644905e2abef2cd7565-68497964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1581928197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10733644905e2abef2cd7565-68497964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2abef2d0cb34_51196727',
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
    'OptionYesNo' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2abef2d0cb34_51196727')) {function content_5e2abef2d0cb34_51196727($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
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
/login.php">28 ログイン</a></li>
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
				<p class="mb10 c_red">送信するメールアドレスが正しいかご確認ください。</p>
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['error'];?>
</p><?php }?>
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr>
								<th scope="row">Eメールアドレス</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

									<input type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
								</td>
							</tr>
						<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['user'])) {?>
							<tr>
								<th scope="row">パスワード</th>
								<td>
									**********
									<input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" />
									<input type="hidden" name="chk_password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['chk_password'];?>
" />
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['id'];?>
" />
									<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['user'];?>
" />
								</td>
							</tr>
							<tr class="last">
								<th scope="row">メールマガジンの送信を希望する</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['OptionYesNo']->value[(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail_magazine_flg'])===null||$tmp==='' ? '0' : $tmp)];?>

									<input type="hidden" name="mail_magazine_flg" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail_magazine_flg'];?>
" />
								</td>
							</tr>
						<?php }?>
						</tbody>
					</table>
					<div class="row form_button">
						<div class="col-xs-6 mb20 pos_al">
							<button class="button _back" type="submit"><i class="fa fa-chevron-left"></i>修正する</button>
						</div>
						<div class="col-xs-6 pos_ar">
							<button id="send_button" class="button" type="submit">送信する<i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>'mypage'), 0);?>

</div>
</body>
</html>
<?php }} ?>
