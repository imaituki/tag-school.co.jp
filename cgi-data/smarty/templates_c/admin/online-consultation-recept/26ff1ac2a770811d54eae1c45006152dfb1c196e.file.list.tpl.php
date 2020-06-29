<?php /* Smarty version Smarty-3.1.18, created on 2020-06-29 16:17:55
         compiled from "/home/tag-school/www/admin/contents/online-consultation-recept/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9379207105ef70a09aa9482-52231424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26ff1ac2a770811d54eae1c45006152dfb1c196e' => 
    array (
      0 => '/home/tag-school/www/admin/contents/online-consultation-recept/template/list.tpl',
      1 => 1593412740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9379207105ef70a09aa9482-52231424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef70a09b684a2_21868391',
  'variables' => 
  array (
    'mst_calendar' => 0,
    'OptionTeacher' => 0,
    'teacher_name' => 0,
    'ymd' => 0,
    'calendar' => 0,
    'OptionWeek' => 0,
    'OptionReserveTime' => 0,
    'time' => 0,
    'teacher_id' => 0,
    'time_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef70a09b684a2_21868391')) {function content_5ef70a09b684a2_21868391($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?>
<style>
	.calendar { margin-bottom:30px; text-align:center; }
	.tbl_1 {}
	.tbl_1 th,
	.tbl_1 td { padding:10px 10px; border-bottom:1px solid #EEE; }
	.tbl_1 thead th,
	.tbl_1 thead td { border-left:1px solid #FFF; border-right:1px solid rgba(255,255,255,0.2); border-bottom:15px solid #4B1D87; }
	.tbl_1 thead th { background:#222; color:#FFF; font-weight:bold; text-shadow:none; }
	.tbl_1 th { background:#F9F6F1 url(../image/layout/tbl_1_th.jpg) repeat-x left top; text-shadow:0 1px 0 #FFF; border-bottom:1px solid #DDD; }
	.tbl_1 .null { background:#FFF; border-bottom:none; }

	.tbl_2 { margin-left:auto; margin-right:auto; }
	.tbl_2 th,
	.tbl_2 td { padding:8px 8px; border-bottom:1px solid #ddd; }
	.tbl_2 thead th,
	.tbl_2 thead td { border-left:5px solid #FFF; border-right:5px solid rgba(255,255,255,0.2); }
	.tbl_2 thead th { color:#333; font-weight:bold; font-size:16px; }
	.tbl_2 th { font-weight:bold; color:#333; text-align:center; }
	.tbl_2 .pointer { cursor: pointer; }
	.tbl_2 .pointer:hover { background: #BFE0FF; }
	.tbl_2 .holiday { background: #FFCACA; }
	.tbl_2 .r_holiday { background: #CCA1A1; }
	.tbl_2 .text { border: 2px solid #aaaaaa; padding: 3px 0; }
	.tbl_2 tbody td { border-left:#eee 1px solid; border-right:#eee 1px solid; }

	table { table-layout:fixed; word-break:break-all; word-wrap:break-word;}

	.xx-large { font-size:16px; }

</style>

<div class="pos_ac large f-bold mb30">
	<table width="100%">
		<tr>
			<td class="pos_ac">
				<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%m");?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%d");?>
" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;">&lt;<span class="hidden-xs"> 前週へ</span></a>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<strong class="xx-large"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date1'],"%Y&#24180;%m&#26376;%d&#26085;");?>
&nbsp;～&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date2'],"%Y&#24180;%m&#26376;%d&#26085;");?>
</strong>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%m");?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%d");?>
" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;"><span class="hidden-xs">次週へ </span>&gt;</a>
			</td>
		</tr>
	</table>
</div>
<div class="mb30 pos_ac">
	「-」…　予約不可　　「〇」…予約可能<br>
	カレンダーの日時をクリックすることで、予約不可／予約可能を切り替えることができます。
</div>
<form action="" method="post" id="formList">
	<input type="hidden" id="display_date" name="display_date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date1'],"%Y%m%d");?>
">
	<div style="margin:0 auto; max-width:870px;">
		<?php  $_smarty_tpl->tpl_vars["teacher_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["teacher_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionTeacher']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher_name"]->key => $_smarty_tpl->tpl_vars["teacher_name"]->value) {
$_smarty_tpl->tpl_vars["teacher_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["teacher_id"]->value = $_smarty_tpl->tpl_vars["teacher_name"]->key;
?>
		<strong><?php echo $_smarty_tpl->tpl_vars['teacher_name']->value;?>
</strong>
		<div class="row">


		<table class="tbl_2 mb10">
			<thead>
				<tr>
					<th style="background-color:  #F9F6F1;"></th>
					<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["ymd"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["ymd"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
?>
						<th style="background-color:  #F9F6F1;"><?php echo substr($_smarty_tpl->tpl_vars['ymd']->value,4,2);?>
/<?php echo substr($_smarty_tpl->tpl_vars['ymd']->value,6,2);?>
(<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[$_smarty_tpl->tpl_vars['calendar']->value['week']];?>
)</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["time"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["time"]->_loop = false;
 $_smarty_tpl->tpl_vars["time_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OptionReserveTime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["time"]->key => $_smarty_tpl->tpl_vars["time"]->value) {
$_smarty_tpl->tpl_vars["time"]->_loop = true;
 $_smarty_tpl->tpl_vars["time_id"]->value = $_smarty_tpl->tpl_vars["time"]->key;
?>
					<tr>
						<th style="background-color:  #F9F6F1;"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</th>
						<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["ymd"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["ymd"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['calendar']->value['calendar'][$_smarty_tpl->tpl_vars['teacher_id']->value][$_smarty_tpl->tpl_vars['time_id']->value])) {?>
								<td id="<?php echo $_smarty_tpl->tpl_vars['calendar']->value['calendar'][$_smarty_tpl->tpl_vars['teacher_id']->value][$_smarty_tpl->tpl_vars['time_id']->value]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['teacher_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ymd']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['time_id']->value;?>
" class="pos_vt pos_ac pointer" >〇</td>
							<?php } else { ?>
								<td id="0_<?php echo $_smarty_tpl->tpl_vars['teacher_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ymd']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['time_id']->value;?>
" class="pos_vt pos_ac pointer" >-</td>
							<?php }?>
						<?php } ?>
					</tr>
				<?php } ?>

			</tbody>
		</table>
		</div>


		<div class="hr-line-dashed"></div>
		<?php } ?>


	</div>
</form>
<?php }} ?>
