<?php /* Smarty version Smarty-3.1.18, created on 2020-06-19 09:25:43
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7049183775e26d5e01b3869-32464001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1592526336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7049183775e26d5e01b3869-32464001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e26d5e0270789_28076629',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'message' => 0,
    'OptionContent' => 0,
    'arr_post' => 0,
    'OptionGrade' => 0,
    'OptionRequest' => 0,
    'OptionKikkake' => 0,
    'key' => 0,
    'kikkake' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e26d5e0270789_28076629')) {function content_5e26d5e0270789_28076629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="contact">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/contact/top.jpg" alt="お問い合わせ"></div>
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
			<div class="center">
				<h2 id="form" class="hl_3 mincho">お問い合わせフォーム</h2>
				<p class="mb20 c_g">下記項目にご入力ください。「必須」印は入力必須項目です。<br>入力後、一番下の「 入力内容を確認する」ボタンをクリックしてください。</p>
				<form action="./check.php#form" method="post">
					<table class="tbl_form bg0">
						<tbody>
							<tr class="first">
								<th scope="row">お問い合わせ項目<span class="need">必須</span></th>
								<td>
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['content'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['content'];?>
</p><?php }?>
									<?php echo smarty_function_html_radios(array('name'=>"content",'options'=>$_smarty_tpl->tpl_vars['OptionContent']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['content'])===null||$tmp==='' ? 3 : $tmp)),$_smarty_tpl);?>

								</td>
							</tr>
							<tr>
								<th>生徒氏名<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</span><?php }?>
									<input type="text" name="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>生徒氏名(フリガナ)<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</span><?php }?>
									<input type="text" name="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>学年<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['grade'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['grade'];?>
</span><?php }?>
									<select name="grade">
										<option value="">選択してください。</option>
										<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionGrade']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['grade']),$_smarty_tpl);?>

									</select>
								</td>
							</tr>
							<tr>
								<th scope="row">希望項目<span class="need">必須</span></th>
								<td>
									<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng']['request'])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['request'];?>
</p><?php }?>
									<?php echo smarty_function_html_radios(array('name'=>"request",'options'=>$_smarty_tpl->tpl_vars['OptionRequest']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['request'])===null||$tmp==='' ? 1 : $tmp)),$_smarty_tpl);?>

								</td>
							</tr>
							<tr>
								<th>入塾希望理由</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['reason'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['reason'];?>
</span><?php }?>
									<textarea name="reason" style="min-height:100px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['reason'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
								</td>
							</tr>
							<tr>
								<th>当校を知ったきっかけ</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['kikkake'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['kikkake'];?>
</span><?php }?>
									<?php  $_smarty_tpl->tpl_vars['kikkake'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kikkake']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionKikkake']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kikkake']->key => $_smarty_tpl->tpl_vars['kikkake']->value) {
$_smarty_tpl->tpl_vars['kikkake']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['kikkake']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['key']->value>0) {?><br /><?php }?>
										<label>
											<input type="checkbox" name="kikkake[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['kikkake'])&&array_search($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['arr_post']->value['kikkake'])!==false) {?>checked<?php }?> />
											<?php echo $_smarty_tpl->tpl_vars['kikkake']->value;?>

										</label>
										<?php if ($_smarty_tpl->tpl_vars['key']->value==5) {?>&nbsp;<input type="text" name="kikkake_5" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['kikkake_5'];?>
" placeholder="ご紹介者のお名前(※任意)" class="input_note" /><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['key']->value==6) {?>&nbsp;<input type="text" name="kikkake_6" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['kikkake_6'];?>
" class="input_note" /><?php }?>
									<?php } ?>
								</td>
							</tr>
							<tr>
								<th>保護者氏名</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</span><?php }?>
									<input type="text" name="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名(フリガナ)</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby2'];?>
</span><?php }?>
									<input type="text" name="ruby2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby2'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>Eメールアドレス<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</span><?php }?>
									<input type="email" name="mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>電話番号<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</span><?php }?>
									<input type="tel" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['tel'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th class="pos-vt">住所</th>
								<td>
									<dl>
										<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['zip'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>
</span><?php }?>
										<dt>郵便番号</dt>
										<dd>
											<input name="zip" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" class="zip w150" placeholder="000-000" >
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block"><i class="fa fa-search" aria-hidden="true"></i>郵便番号から住所を自動入力する</a>
										</dd>
									</dl>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>
</span><?php }?>
									<dl>
										<dt>都道府県</dt>
										<dd>
											<?php echo smarty_function_html_select_ken(array('name'=>"prefecture",'class'=>"form-control inline input-s",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

										</dd>
									</dl>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address'];?>
</span><?php }?>
									<dl>
										<dt>住所</dt>
										<dd class="w-420">
											<input name="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
" type="text">
										</dd>
									</dl>
								</td>
							</tr>
							<tr class="last">
								<th>お問い合わせ内容</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</span><?php }?>
									<textarea name="comment" style="min-height:100px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="pos_ac form_button">
						<button class="button" type="submit">入力内容を確認する<i class="fa fa-chevron-right"></i></button>
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
