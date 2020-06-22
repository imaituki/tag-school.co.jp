<?php /* Smarty version Smarty-3.1.18, created on 2020-06-20 10:10:32
         compiled from "./timetable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18599422345edde30a627973-56896654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca15c726d7ce981a122975a51b8d5c249ee635a0' => 
    array (
      0 => './timetable.tpl',
      1 => 1592615409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18599422345edde30a627973-56896654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5edde30a63b7d4_06716010',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'select_date' => 0,
    'OptionReserveTime' => 0,
    'reservetime' => 0,
    'key' => 0,
    'count' => 0,
    't_reserve_setting' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edde30a63b7d4_06716010')) {function content_5edde30a63b7d4_06716010($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
		<div class="wrapper bg_common">
			<div class="center tbl_calendar">
				<h2 class="hl_3 mincho">LINEオンライン面談空き時間確認（<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,"%Y&#24180;%m&#26376;%d&#26085;");?>
）</h2>
				<p class="mb30">下記よりご希望の時間をお選びください。</p>
				<table class="timetable mb30">
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["reservetime"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["reservetime"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionReserveTime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["reservetime"]->key => $_smarty_tpl->tpl_vars["reservetime"]->value) {
$_smarty_tpl->tpl_vars["reservetime"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["reservetime"]->key;
?>
						<tr>
							<th><?php echo $_smarty_tpl->tpl_vars['reservetime']->value;?>
</th>
							<td <?php if ($_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['key']->value]>=$_smarty_tpl->tpl_vars['t_reserve_setting']->value['max_number']) {?> class="none"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['key']->value]>=$_smarty_tpl->tpl_vars['t_reserve_setting']->value['max_number']) {?>
									×
								<?php } elseif ($_smarty_tpl->tpl_vars['t_reserve_setting']->value['mid_number']!=0&&$_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['key']->value]>=$_smarty_tpl->tpl_vars['t_reserve_setting']->value['mid_number']) {?>
									<a href="./form.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%Y');?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%m');?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%d');?>
&t=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">△</a>
								<?php } else { ?>
									<a href="./form.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%Y');?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%m');?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['select_date']->value,'%d');?>
&t=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">〇</a>
								<?php }?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="pos_ac">
					<a href="/online-consultation/" class="button _type1 ov"><i class="fa fa-chevron-left"></i>日付選択に戻る</a>
				</div>
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
