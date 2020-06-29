<?php /* Smarty version Smarty-3.1.18, created on 2020-06-29 17:36:16
         compiled from "/home/tag-school/www/admin/contents/online-consultation2/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20953010455ef7097e13a8f7-94408101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8685912d4e5ccc2939010fd0275fe9c4b668bbc9' => 
    array (
      0 => '/home/tag-school/www/admin/contents/online-consultation2/template/list.tpl',
      1 => 1593419520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20953010455ef7097e13a8f7-94408101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ef7097e1a2587_79216529',
  'variables' => 
  array (
    'mst_calendar' => 0,
    'arr_post' => 0,
    'calendar' => 0,
    'key' => 0,
    'OptionWeek' => 0,
    'detail' => 0,
    'OptionReserveTime' => 0,
    'OptionTeacher' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef7097e1a2587_79216529')) {function content_5ef7097e1a2587_79216529($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><style>
.tbl_calendar {
	width: 100%;
	table-layout: fixed;
}
.tbl_calendar th, .tbl_calendar td {
	border: 1px solid #ddd;
	padding: 10px;
	background-color: #fff;
}

.tbl_calendar thead th {
	text-align: center;
	font-weight: bold;
	background: #eee;
}

.tbl_calendar tbody td span.day {
	font-weight: bold;
}

.tbl_calendar tbody td span.cancel-day {
	color: #D12225;
}

.tbl_calendar tbody td div {
	margin: 0 -10px;
	position: relative;
	display: block;
	line-height: 1.3;
	border-radius: 3px;
	border: 1px solid #3a87ad;
	font-weight: normal;
	margin: 2px 2px 0;
	padding: 0 1px;
	color: #444;
}
.reserve-time {
	font-weight: bold;
}
.reserveday { background-color:#92e0ff; }
.reserveday._admin { background-color:#c8efff; }
.cancelday { background-color:#e48282; border-color:#900 !important; }
.cancelday a { color:#fff; font-size:0.9em; }
.reserveday a, .cancelday a { display:block; }
.reserveday a:hover { background:#3f628c; color:#fff; }
.cancelday a:hover { background:#900; color:#fff; }
.table-overflow-wrap { overflow: auto; }
.table-overflow-wrap table { width: auto; }
.table-overflow-wrap th,
.table-overflow-wrap td { white-space: nowrap; }

.calendar_date_select strong { font-size:18px; }

#datepicker { display:inline-table; width:180px; }
#change_date { background:#fff; height:100%; }

@media (min-width: 992px){
	.sp { display:none; }
}

@media (max-width: 991px){
	.tbl_2 tr { height:100%; }
	.tbl_2 th,
	.tbl_2 td { display:none; }
	.tbl_2 td.pointer { display:block; }
}

@media (max-width: 767px){
	#datepicker { width:50%; }
}

</style>
<div id="calendar" class="wrapper wrapper-content">
	<p class="calendar_date_select pos_ac large f-bold mb30">
		<span>
			<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_date'],"%m");?>
<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['search_teacher'])) {?>&teacher=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['search_teacher'];?>
<?php }?>" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;">&lt;<span class="hidden-xs"> 前月へ</span></a>
			&nbsp;
			<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			
			<span class="input-daterange input-group pos_vm" id="datepicker">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				<input type="text" class="input-sm form-control datepicker_m" name="date" id="change_date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y&#24180;%m&#26376;");?>
" readonly>
			</span>
			&nbsp;
			<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],"%m");?>
<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['search_teacher'])) {?>&teacher=<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['search_teacher'];?>
<?php }?>" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;"><span class="hidden-xs">次月へ </span>&gt;</a>
		</span>
	</p>
	<div align="center">
		<table class="tbl_2 mb10 tbl_calendar" width="95%">
			<thead>
				<tr>
					<th>日</th>
					<th>月</th>
					<th>火</th>
					<th>水</th>
					<th>木</th>
					<th>金</th>
					<th>土</th>
				</tr>
			</thead>
			<tbody>
		<tr height="150px">
		<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["calendar"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["calendar"]->iteration=0;
 $_smarty_tpl->tpl_vars["calendar"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
 $_smarty_tpl->tpl_vars["calendar"]->iteration++;
 $_smarty_tpl->tpl_vars["calendar"]->index++;
 $_smarty_tpl->tpl_vars["calendar"]->first = $_smarty_tpl->tpl_vars["calendar"]->index === 0;
 $_smarty_tpl->tpl_vars["calendar"]->last = $_smarty_tpl->tpl_vars["calendar"]->iteration === $_smarty_tpl->tpl_vars["calendar"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCalendar"]['first'] = $_smarty_tpl->tpl_vars["calendar"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopCalendar"]['last'] = $_smarty_tpl->tpl_vars["calendar"]->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['first']) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['calendar']->value['week']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['name'] = "loopStart";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopStart"]['total']);
?>
					<td>&nbsp;</td>
				<?php endfor; endif; ?>
			<?php }?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['first']&&$_smarty_tpl->tpl_vars['calendar']->value['week']==0) {?>
				<tr height="150px">
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['calendar']->value['calendar'])) {?>
				<td class="pos_vt pointer" >
					<a href="./new.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%m");?>
&d=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<span class="sp"> (<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[$_smarty_tpl->tpl_vars['calendar']->value['week']];?>
)</span></a>
					<?php  $_smarty_tpl->tpl_vars["detail"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["detail"]->_loop = false;
 $_smarty_tpl->tpl_vars["key2"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["detail"]->key => $_smarty_tpl->tpl_vars["detail"]->value) {
$_smarty_tpl->tpl_vars["detail"]->_loop = true;
 $_smarty_tpl->tpl_vars["key2"]->value = $_smarty_tpl->tpl_vars["detail"]->key;
?>
						<div class="<?php if ($_smarty_tpl->tpl_vars['detail']->value['cancel_flg']==1) {?>cancelday<?php } elseif ($_smarty_tpl->tpl_vars['detail']->value['mail']=="office@web3.co.jp") {?>reserveday _admin<?php } else { ?>reserveday<?php }?>">
							<a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_online_consultation'];?>
"><span class="reserve-time"><?php echo $_smarty_tpl->tpl_vars['OptionReserveTime']->value[$_smarty_tpl->tpl_vars['detail']->value['time']];?>
</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['detail']->value['name2'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['detail']->value['teacher']])) {?><br>担当：<?php echo $_smarty_tpl->tpl_vars['OptionTeacher']->value[$_smarty_tpl->tpl_vars['detail']->value['teacher']];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['detail']->value['cancel_flg']==1) {?><br>※キャンセル<?php }?></a>
						</div>
					<?php } ?>
				</td>
			<?php } else { ?>
				<td class="pos_vt pointer"><a href="./new.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%m");?>
&d=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<span class="sp"> (<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[$_smarty_tpl->tpl_vars['calendar']->value['week']];?>
)</span></a>
				</td>
			<?php }?>

			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['last']) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = (int) $_smarty_tpl->tpl_vars['calendar']->value['week'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['name'] = "loopEnd";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopEnd"]['total']);
?>
					<td>&nbsp;</td>
				<?php endfor; endif; ?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['calendar']->value['week']==6) {?>
				</tr>
			<?php }?>
		<?php } ?>
		</tbody>
		</table>
	</div>
</div>
<?php }} ?>
