<?php /* Smarty version Smarty-3.1.18, created on 2020-06-30 16:31:48
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17488510835edddcf694cd63-45214983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1593502259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17488510835edddcf694cd63-45214983',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5edddcf69fc8f4_00212216',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
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
<?php if ($_valid && !is_callable('content_5edddcf69fc8f4_00212216')) {function content_5edddcf69fc8f4_00212216($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_ken')) include '/home/tag-school/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
				<h2 class="hl_3 mincho">LINEオンライン面談予約　確認</h2>
					<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
					<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
					<form action="./#form" method="post">
						<table class="tbl_form bg0">
							<tbody>
								<tr>
									<th>面談希望日時</th>
									<td>
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"%Y&#24180;%m&#26376;%d&#26085;");?>
(<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr_post']->value['date'],"w")];?>
) <?php echo $_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['arr_post']->value['time']];?>

										<input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['date'];?>
">
										<input type="hidden" name="time" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['time'];?>
">
									</td>
								</tr>
								<tr>
									<th>担当講師</th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['arr_post']->value['teacher']];?>

										<input type="hidden" name="teacher" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['teacher'];?>
">
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
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['zip'])||!empty($_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])||!empty($_smarty_tpl->tpl_vars['arr_post']->value['address'])) {?>
											<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['zip']) {?>〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
<br><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['arr_post']->value['prefecture']!=0) {?><?php echo smarty_function_html_select_ken(array('selected'=>$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'],'pre'=>1),$_smarty_tpl);?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>

										<?php } else { ?>
											--
										<?php }?>
										<input type="hidden" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
">
										<input type="hidden" name="prefecture" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['prefecture'];?>
">
										<input type="hidden" name="address" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address'];?>
">
									</td>
								</tr>
								<tr>
									<th>児童・生徒氏名</th>
									<td>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '--' : $tmp);?>

										<input type="hidden" name="name1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['name1'])===null||$tmp==='' ? '' : $tmp);?>
" />
									</td>
								</tr>
								<tr>
									<th>児童・生徒氏名(フリガナ)</th>
									<td>
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '--' : $tmp);?>

										<input type="hidden" name="ruby1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['ruby1'])===null||$tmp==='' ? '' : $tmp);?>
" />
									</td>
								</tr>
								<tr>
									<th>性別</th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['OptionSex']->value[$_smarty_tpl->tpl_vars['arr_post']->value['sex']];?>

										<input type="hidden" name="sex" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['sex'])===null||$tmp==='' ? '' : $tmp);?>
" />
									</td>
								</tr>
								<tr>
									<th>学年</th>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['OptionGrade']->value[$_smarty_tpl->tpl_vars['arr_post']->value['grade']];?>

										<input type="hidden" name="grade" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['grade'])===null||$tmp==='' ? '' : $tmp);?>
" />
									</td>
								</tr>
								<tr class="last">
									<th>お問い合わせ内容</th>
									<td>
										<?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']))===null||$tmp==='' ? '--' : $tmp);?>

										<input type="hidden" name="comment" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['comment'])===null||$tmp==='' ? '' : $tmp);?>
" />
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row form_button">
							<div class="col-xs-6 mb20 pos_al">
								<button class="button _back" onclick="this.form.action='./form.php'"><i class="fa fa-chevron-left"></i>修正する</button>
							</div>
							<div class="col-xs-6 pos_ar">
								<input type="hidden" name="referer" value="1" />
								<input type="hidden" name="status" value="0" />
								<!-- <button id="send_button" class="button" type="submit">送信する<i class="fa fa-chevron-right"></i></button> -->
								<button id="" class="button" type="submit" onclick="$(this).attr('formaction', './send.php');">送信する<i class="fa fa-chevron-right"></i></button>
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
