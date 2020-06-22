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

	.xx-large { font-size:16px; }

</style>
{/literal}
<div class="pos_ac large f-bold mb30">
	<table width="100%">
		<tr>
			<td class="pos_ac">
				<a href="./index.php?y={$mst_calendar.back_date|date_format:"%Y"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;">&lt;<span class="hidden-xs"> 前年へ</span></a>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<strong class="xx-large">{$mst_calendar.display_date|date_format:"%Y年"}</strong>&nbsp;
				<span class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<a href="./index.php?y={$mst_calendar.next_date|date_format:"%Y"}" class="btn btn-primary btn-s" style="color:#FFF; text-decoration: none; font-weight: bold;"><span class="hidden-xs">次年へ </span>&gt;</a>
			</td>
		</tr>
	</table>
</div>
<div class="mb30 pos_ac">
	赤い背景色の日付は休業日です。休業日は、予約受付システムで予約ができなくなります。<br>
	カレンダーの日付をクリックすることで、営業日／休業日を切り替えることができます。</div>
<form action="" method="post" id="formList">
	<div style="margin:0 auto; max-width:870px;">
		<div class="row">
		{foreach from=$mst_calendar.calendar item="calendar" key="ym" name="loopCalendar"}
			<div class="col-lg-4 col-md-6 calendar">
				<input type="hidden" name="ym{$ym}" class="ym" value="{$ym}" />
				<table class="tbl_2 mb10">
					<thead>
						<tr>
							<th colspan="7">{$ym|substr:0:4}年{$ym|substr:4:2}月</th>
						</tr>
						<tr>
							<th class="c_red" style="background-color: #F9F6F1;">日</th>
							<th style="background-color: #F9F6F1;">月</th>
							<th style="background-color: #F9F6F1;">火</th>
							<th style="background-color: #F9F6F1;">水</th>
							<th style="background-color: #F9F6F1;">木</th>
							<th style="background-color: #F9F6F1;">金</th>
							<th class="c_blue" style="background-color: #F9F6F1;">土</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$calendar item="month" key="key" name="loopCalendarMonth"}
							{if $smarty.foreach.loopCalendarMonth.first == 1 || $month.week == 0}
								<tr>
								{if $smarty.foreach.loopCalendarMonth.first}
									{section start=0 loop=$month.week name="loopStart"}
										<td>&nbsp;</td>
									{/section}
								{/if}
							{/if}
							<td class="pos_vt pos_ac pointer{if $month.calendar != NULL} holiday{/if}{if $month.week == 0} c_red{elseif $month.week == 6} c_blue{/if}"{if $month.calendar != NULL} id="{$month.calendar}"{/if}>
								{$key|string_format:"%d"}
							</td>
							{if $smarty.foreach.loopCalendarMonth.last}
								{section start=$month.week loop=6 name="loopEnd"}
									<td>&nbsp;</td>
								{/section}
							{/if}
							{if $smarty.foreach.loopCalendarMonth.last == 1 || $month.week == 6}
								</tr>
							{/if}
						{/foreach}
					</tbody>
				</table>
			</div>
		{/foreach}
		</div>
	</div>
</form>
