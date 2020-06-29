{literal}
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
{/literal}
<div class="pos_ac large f-bold mb30">
	<table width="100%">
		<tr>
			<td class="pos_ac">
				<a href="./index.php?y={$mst_calendar.back_week|date_format:"%Y"}&m={$mst_calendar.back_week|date_format:"%m"}&d={$mst_calendar.back_week|date_format:"%d"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;">&lt;<span class="hidden-xs"> 前週へ</span></a>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<strong class="xx-large">{$mst_calendar.display_date1|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}&nbsp;～&nbsp;{$mst_calendar.display_date2|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}</strong>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<a href="./index.php?y={$mst_calendar.next_week|date_format:"%Y"}&m={$mst_calendar.next_week|date_format:"%m"}&d={$mst_calendar.next_week|date_format:"%d"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;"><span class="hidden-xs">次週へ </span>&gt;</a>
			</td>
		</tr>
	</table>
</div>
<div class="mb30 pos_ac">
	「-」…　予約不可　　「〇」…予約可能<br>
	カレンダーの日時をクリックすることで、予約不可／予約可能を切り替えることができます。
</div>
<form action="" method="post" id="formList">
	<input type="hidden" id="display_date" name="display_date" value="{$mst_calendar.display_date1|date_format:"%Y%m%d"}">
	<div style="margin:0 auto; max-width:870px;">
		{foreach from=$OptionTeacher item="teacher_name" key="teacher_id" }
		<strong>{$teacher_name}</strong>
		<div class="row">


		<table class="tbl_2 mb10">
			<thead>
				<tr>
					<th style="background-color:  #F9F6F1;"></th>
					{foreach from=$mst_calendar.calendar item="calendar" key="ymd" name="loopCalendar"}
						<th style="background-color:  #F9F6F1;">{$ymd|substr:4:2}/{$ymd|substr:6:2}({$OptionWeek[$calendar.week]})</th>
					{/foreach}
				</tr>
			</thead>
			<tbody>
				{foreach from=$OptionReserveTime item="time" key="time_id"}
					<tr>
						<th style="background-color:  #F9F6F1;">{$time}</th>
						{foreach from=$mst_calendar.calendar item="calendar" key="ymd" name="loopCalendar"}
							{if !empty($calendar.calendar.$teacher_id.$time_id)}
								<td id="{$calendar.calendar.$teacher_id.$time_id.id}_{$teacher_id}_{$ymd}_{$time_id}" class="pos_vt pos_ac pointer" >〇</td>
							{else}
								<td id="0_{$teacher_id}_{$ymd}_{$time_id}" class="pos_vt pos_ac pointer" >-</td>
							{/if}
						{/foreach}
					</tr>
				{/foreach}

			</tbody>
		</table>
		</div>


		<div class="hr-line-dashed"></div>
		{/foreach}


	</div>
</form>
