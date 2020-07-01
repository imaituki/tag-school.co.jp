<?php /* Smarty version Smarty-3.1.18, created on 2020-06-30 16:31:31
         compiled from "./form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2794325415edde15d764ec0-67294401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7741e0481721ae4d2bfd622c5a8934f555d74e4f' => 
    array (
      0 => './form.tpl',
      1 => 1593502259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2794325415edde15d764ec0-67294401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5edde15d7f4f07_83851151',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'message' => 0,
    'arr_post' => 0,
    'OptionWeek' => 0,
    'OptionReserveTime' => 0,
    'OptionTeacher' => 0,
    'OptionSex' => 0,
    'OptionGrade' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edde15d7f4f07_83851151')) {function content_5edde15d7f4f07_83851151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
if (!is_callable('smarty_function_html_options')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="online-consultation">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/online-consultation/top.jpg" alt="LINEオンライン面談予約"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">LINEオンライン面談予約</span><span class="sub">Online-consultation</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>LINEオンライン面談予約</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<h2 class="hl_3 mincho">LINEオンライン面談予約</h2>
				<p class="mb20 c_g">下記項目にご入力ください。「必須」印は入力必須項目です。<br>入力後、一番下の「 入力内容を確認する」ボタンをクリックしてください。</p>
				<form action="./check.php#form" method="post">
					<table class="tbl_form">
						<tbody>
							<tr class="first">
								<th>面談希望日時<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['date'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['date'];?>
</span><?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['time'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['time'];?>
</span><?php }?>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"%Y&#24180;%m&#26376;%d&#26085;");?>
(<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"w")];?>
) <?php if (!empty($_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time']])) {?><?php echo $_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time']];?>
<?php }?>
									<input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date'];?>
" />
									<input type="hidden" name="time" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['time'];?>
" />
								</td>
							</tr>
							<tr>
								<th>担当講師<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['teacher'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['teacher'];?>
</span><?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['arr_post']->value['teacher']])) {?><?php echo $_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['arr_post']->value['teacher']];?>
<?php }?>
									<input type="hidden" name="teacher" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['teacher'];?>
" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name2'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name2'];?>
</span><?php }?>
									<input type="text" name="name2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name2'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名(フリガナ)<span class="need">必須</span></th>
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
							<tr>
								<th>児童・生徒氏名</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name1'];?>
</span><?php }?>
									<input type="text" name="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>児童・生徒氏名(フリガナ)</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby1'];?>
</span><?php }?>
									<input type="text" name="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
								</td>
							</tr>
							<tr>
								<th>性別<span class="need">必須</span></th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['sex'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['sex'];?>
</span><?php }?>
									<select name="sex">
										<option value="">選択してください。</option>
										<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['OptionSex']->value,'selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['sex']),$_smarty_tpl);?>

									</select>
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
							<tr class="last">
								<th>面談で相談したい内容</th>
								<td>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</span><?php }?>
									<textarea name="comment" style="min-height:200px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="row form_button">
						<div class="col-xs-6 mb20 pos_al">
							<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],'%Y');?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],'%m');?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],'%d');?>
&w=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],'%w');?>
" class="button _back"><i class="fa fa-chevron-left"></i>時間選択に戻る</a>
						</div>
						<div class="col-xs-6 pos_ar">
							<button class="button" type="submit">入力内容を確認する<i class="fa fa-chevron-right"></i></button>
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
