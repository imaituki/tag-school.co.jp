<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="online-consultation">
<div id="base">
{include file=$template_header}
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
				<h2 class="hl_3 mincho">LINEオンライン面談空き時間確認（{$select_date|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}）</h2>
				<p class="mb30">下記よりご希望の時間をお選びください。</p>
				<table class="timetable mb30">
					<tbody>
						{foreach from=$OptionReserveTime item="reservetime" key="key"}
						<tr>
							<th>{$reservetime}</th>
							<td {if $count.$key >= $t_reserve_setting.max_number} class="none"{/if}>
								{if $count.$key >= $t_reserve_setting.max_number}
									×
								{elseif $t_reserve_setting.mid_number != 0 && $count.$key >= $t_reserve_setting.mid_number}
									<a href="./form.php?y={$select_date|date_format:'%Y'}&m={$select_date|date_format:'%m'}&d={$select_date|date_format:'%d'}&t={$key}">△</a>
								{else}
									<a href="./form.php?y={$select_date|date_format:'%Y'}&m={$select_date|date_format:'%m'}&d={$select_date|date_format:'%d'}&t={$key}">〇</a>
								{/if}
							</td>
						</tr>
						{/foreach}
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
{include file=$template_footer}
</div>
</body>
</html>
