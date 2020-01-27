<?php /* Smarty version Smarty-3.1.18, created on 2020-01-25 20:37:51
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18179687925e29596700dac2-23694622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1579952270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18179687925e29596700dac2-23694622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e29596706e319_96281723',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_FRONT' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e29596706e319_96281723')) {function content_5e29596706e319_96281723($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
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
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">Eメールアドレス</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>

									<input type="hidden" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
								</td>
							</tr>
							<tr>
								<th scope="row">パスワード</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['password'])) {?>
										************
										<input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['password'];?>
" />
									<?php } else { ?>
										変更なし
									<?php }?>
								</td>
							</tr>
							<tr>
								<th scope="row">お名前</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>

									<input type="hidden" name="name1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name1'];?>
" />
									<input type="hidden" name="name2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
" />
								</td>
							</tr>
							<tr>
								<th scope="row">お名前フリガナ</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>

									<input type="hidden" name="ruby1" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby1'];?>
" />
									<input type="hidden" name="ruby2" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
" />
								</td>
							</tr>
							<tr>
								<th scope="row">電話番号</th>
								<td>
									<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '未入力' : $tmp);?>

									<input type="hidden" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" />
								</td>
							</tr>
							<tr class="last">
								<th scope="row">住所</th>
								<td>
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
								</td>
							</tr>
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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
