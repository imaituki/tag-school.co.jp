<?php /* Smarty version Smarty-3.1.18, created on 2020-02-22 14:29:33
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17533795145e295c9bd90d31-47659288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1581928233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17533795145e295c9bd90d31-47659288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e295c9bdf83a6_81278786',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_FRONT' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'message' => 0,
    'member' => 0,
    'OptionYesNo' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e295c9bdf83a6_81278786')) {function content_5e295c9bdf83a6_81278786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_radios.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
				<form class="mb30" action="check.php" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<?php if (empty($_smarty_tpl->tpl_vars['arr_post']->value['user'])) {?>
								<tr>
									<th scope="row">Eメールアドレス<span class="need">必須</span></th>
									<td>
										<p>
											※tag-school.co.jpからのメールを受け取れるよう設定をお願いいたします。<br />
											※メールアドレスを誤って送信された場合は受付ができませんのでご注意ください。
										</p>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
										<input type="email" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" placeholder="Eメールアドレス" />
									</td>
								</tr>
							<?php } else { ?>
								<tr class="first">
									<th scope="row">Eメールアドレス<span class="need">必須</span></th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['member']->value['mail'];?>

										<input type="hidden" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['mail'];?>
" placeholder="Eメールアドレス" />
									</td>
								</tr>
								<tr>
									<th scope="row">パスワード<span class="need">必須</span></th>
									<td>
										<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
										<input type="password" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" placeholder="パスワード" />
										<p style="margin-bottom: 0px;  font-size: 12px;">※パスワードは8-36文字で設定してください。</p>
									</td>
								</tr>
								<tr>
									<th scope="row">パスワード(確認用)<span class="need">必須</span></th>
									<td>
										<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['id_member'];?>
" />
										<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['user'];?>
" />
										<input type="password" id="chk_password" name="chk_password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['chk_password'];?>
" placeholder="パスワード(確認用)" />
									</td>
								</tr>
								<tr class="last">
									<th scope="row">メールマガジンの送信を希望する<span class="need">必須</span></th>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail_magazine_flg'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail_magazine_flg'];?>
</p><?php }?>
										<?php echo smarty_function_html_radios(array('name'=>"mail_magazine_flg",'options'=>$_smarty_tpl->tpl_vars['OptionYesNo']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail_magazine_flg'])===null||$tmp==='' ? 1 : $tmp),'separator'=>'&nbsp;'),$_smarty_tpl);?>

									</td>
								</tr>
							<?php }?>
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>'mypage'), 0);?>

</div>
</body>
</html>
<?php }} ?>
