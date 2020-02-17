<?php /* Smarty version Smarty-3.1.18, created on 2020-02-17 17:30:38
         compiled from "./login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9437262255e2954bb7b7e95-40544963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ea94358e1c4bf68a43e6ef77d01e2527e1883b' => 
    array (
      0 => './login.tpl',
      1 => 1581928056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9437262255e2954bb7b7e95-40544963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2954bb7e98b8_77442151',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'message' => 0,
    'arr_get' => 0,
    '_DIR_NAME' => 0,
    '_FRONT' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2954bb7e98b8_77442151')) {function content_5e2954bb7e98b8_77442151($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="contact">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
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
				<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?><p class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['error'];?>
</p><?php }?>
				<form class="mb30" action="./login.php<?php if ($_smarty_tpl->tpl_vars['arr_get']->value['mode']!=null) {?>?mode=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['mode'];?>
<?php }?>" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス<span class="need">必須</span></th>
								<td>
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</p><?php }?>
									<input type="email" id="mail" name="mail" value="" placeholder="Eメールアドレス" />
								</td>
							</tr>
							<tr class="last">
								<th scope="row">パスワード<span class="need">必須</span></th>
								<td>
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['password'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['password'];?>
</p><?php }?>
									<input type="password" id="password" class="mb10" name="password" value="" placeholder="パスワード" />
									<p class="pos-ac mb0"><a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/reissue/">パスワードを忘れた方はこちら</a></p>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="pos_ac form_button">
						<button class="button" type="submit">ログイン<i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
				<div class="pos_ac">
					<a  class="btn_2" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/regist/">新規会員登録はこちら</a>
				</div>
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
