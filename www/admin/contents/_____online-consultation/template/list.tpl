<style>{literal}
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

{/literal}</style>
<div id="calendar" class="wrapper wrapper-content">
	<p class="calendar_date_select pos_ac large f-bold mb30">
		<span>
			<a href="./index.php?y={$mst_calendar.back_date|date_format:"%Y"}&m={$mst_calendar.back_date|date_format:"%m"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;">&lt;<span class="hidden-xs"> 前月へ</span></a>
			&nbsp;
			<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			{*<strong class="xx-large">{$mst_calendar.display_date|date_format:"%Y&#24180;%m&#26376;"}</strong>*}
			<span class="input-daterange input-group pos_vm" id="datepicker">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				<input type="text" class="input-sm form-control datepicker_m" name="date" id="change_date" value="{$mst_calendar.display_date|date_format:"%Y&#24180;%m&#26376;"}" readonly>
			</span>
			&nbsp;
			<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<a href="./index.php?y={$mst_calendar.next_date|date_format:"%Y"}&m={$mst_calendar.next_date|date_format:"%m"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;"><span class="hidden-xs">次月へ </span>&gt;</a>
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
		{foreach from=$mst_calendar.calendar item="calendar" key="key" name="loopCalendar"}
			{if $smarty.foreach.loopCalendar.first}
				{section start=0 loop=$calendar.week name="loopStart"}
					<td>&nbsp;</td>
				{/section}
			{/if}
			{if !$smarty.foreach.loopCalendar.first && $calendar.week == 0}
				<tr height="150px">
			{/if}

			{if !empty( $calendar.calendar )}
				<td class="pos_vt pointer" >
					<a href="./new.php?y={$mst_calendar.display_date|date_format:"%Y"}&m={$mst_calendar.display_date|date_format:"%m"}&d={$key}">{$key}<span class="sp"> ({$OptionWeek[$calendar.week]})</span></a>
					{foreach from=$calendar.calendar item="detail" key="key2" name="loopDetail"}
						<div class="{if $detail.cancel_flg == 1}cancelday{elseif $detail.mail=="office@web3.co.jp"}reserveday _admin{else}reserveday{/if}">
							<a href="./edit.php?id={$detail.id_online_consultation}"><span class="reserve-time">{$OptionReserveTime[$detail.time]}</span>&nbsp;{$detail.name2}{if $detail.cancel_flg == 1}<br>※キャンセル{/if}</a>
						</div>
					{/foreach}
				</td>
			{else}
				<td class="pos_vt pointer"><a href="./new.php?y={$mst_calendar.display_date|date_format:"%Y"}&m={$mst_calendar.display_date|date_format:"%m"}&d={$key}">{$key}<span class="sp"> ({$OptionWeek[$calendar.week]})</span></a>
				</td>
			{/if}

			{if $smarty.foreach.loopCalendar.last}
				{section start=$calendar.week loop=6 name="loopEnd"}
					<td>&nbsp;</td>
				{/section}
			{/if}
			{if $calendar.week == 6}
				</tr>
			{/if}
		{/foreach}
		</tbody>
		</table>
	</div>
</div>
