<?php /* Smarty version Smarty-3.1.18, created on 2020-01-27 14:30:20
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9932258365e280add2d6f40-14070391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1579854319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9932258365e280add2d6f40-14070391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e280add32b328_49422296',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'OptionContent' => 0,
    'OptionGrade' => 0,
    'OptionRequest' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e280add32b328_49422296')) {function content_5e280add32b328_49422296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="contact">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/contact/top.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
" /></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</span><span class="sub">Contact</span></h2>
			</div>
		</div>
	</div>
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
			<div id="form" class="center">
				<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
				<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
				<form action="./#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">お問い合わせ項目</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['OptionContent']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content']];?>

									<input type="hidden" name="content" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['content'];?>
" />
								</td>
							</tr>
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
								<th scope="row">希望項目</th>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['OptionRequest']->value[$_smarty_tpl->tpl_vars['arr_post']->value['request']];?>

									<input type="hidden" name="request" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['request'];?>
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
								<th class="pos-vt">住所</th>
								<td>〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
<br>
									<?php echo smarty_function_html_select_ken(array('selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? '' : $tmp),'pre'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>

									<input type="hidden" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
">
									<input type="hidden" name="prefecture" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['prefecture'];?>
">
									<input type="hidden" name="address" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>
">
								</td>
							</tr>
							<tr class="last">
								<th>備考</th>
								<td>
									<?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']);?>

									<input type="hidden" name="comment" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
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
</html><?php }} ?>
