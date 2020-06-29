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
		<div class="wrapper bg_common" >
			<div class="center">
				<h2 class="hl_3 mincho">LINEでオンライン面談はじめました</h2>
				<p class="mb10">下記予約カレンダーより日付をクリックしてご予約下さい。<br>日付をクリックすると空き時間が確認できます。</p>
				<p class="mb30">当日の予約については、お電話でご相談ください。<br><a href="tel:0862424119" class="fw_bold"><i class="fas fa-phone-alt"></i>086-242-4119</a></p>

				{foreach from=$t_teacher item="teacher"}
					<h2 class="hl_4 mincho mb20">
						{if !empty($teacher.url)}
							<a href="{$teacher.url}" target="_blank">{$teacher.name}</a>
						{else}
							{$teacher.name}
						{/if}
					</h2>

					<div class="content wrap tbl_calendar mb50">
						<p class="pos_ac fw_bold mb10 month">
							{if $mst_calendar.back_week|date_format:'%Y-%m-%d' >= date("Y-m-d")}
								<a href="./_index.php?y={$mst_calendar.back_week|date_format:"%Y"}&m={$mst_calendar.back_week|date_format:"%m"}&d={$mst_calendar.back_week|date_format:"%d"}">&lt;&lt;</a>
							{else if $mst_calendar.display_date|date_format:'%Y-%m-%d' == date("Y-m-d")}
								<span>&lt;&lt;</span>
							{else}
								<a href="./_index.php?y={date("Y")}&m={date("m")}&d={date("d")}">&lt;&lt;</a>
							{/if}
								{$mst_calendar.display_date|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}～{$mst_calendar.display_date_end|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}
	{if $mst_calendar.next_week|date_format:'%Y-%m-%d' >= $mst_calendar.next_limit|date_format:'%Y-%m-%d'}
	<span>&gt;&gt;</span>
	{else}
							{if $mst_calendar.next_week|date_format:'%Y-%m-%d' >= date("Y-m-d") && $mst_calendar.next_week|date_format:'%Y-%m-%d' < $mst_calendar.next_limit|date_format:'%Y-%m-%d'}
								<a href="./_index.php?y={$mst_calendar.next_week|date_format:"%Y"}&m={$mst_calendar.next_week|date_format:"%m"}&d={$mst_calendar.next_week|date_format:"%d"}">&gt;&gt;</a>
							{else}
								<span>&gt;&gt;</span>
							{/if}
	{/if}
						</p>
						<p class="pos_ar">「-」…予約不可　「〇」…予約可能</p>
						<table>
							<thead>
								<tr>
									<th></th>
									{foreach from=$mst_calendar.calendar item="calendar" key="ymd" name="loopCalendar"}
										{if !empty($calendar.day)}
											<th>{$calendar.day|substr:5:2}/{$calendar.day|substr:8:2}<br class="visible-xs">({$OptionWeek[$calendar.week]})</th>
										{/if}
									{/foreach}
								</tr>
							</thead>
							<tbody>
								{foreach from=$OptionReserveTime item="time" key="time_id"}
									<tr>
										<th>{$time}</th>
										{$day = 0}
										{foreach from=$mst_calendar.calendar item="calendar" key="ymd" name="loopCalendar"}
											{if !empty($calendar.day)}
												{$teacher_id = $teacher["id_online_consultation_teacher"]}
												{if $reserved.$teacher_id.$day.$time_id == 1}
													<td>予約済み</td>
												{else}
													{if $calendar.resept.$teacher_id.$time_id|default:"" == 1}
														<td><a href="./_form.php?y={$calendar.day|substr:0:4}&m={$calendar.day|substr:5:2}&d={$calendar.day|substr:8:2}&t={$time_id}&teacher={$teacher_id}">〇</a></td>
													{else}
														<td>-</td>
													{/if}
												{/if}
											{/if}
											{$day = $day + 1}
										{/foreach}
									</tr>
								{/foreach}
							</tbody>
						</table>
						<p class="time mb50 ">※所要時間は平均で30分～45分程度となります。</p>
					</div>
				{/foreach}
				<div class="wrapper-t" id="flow1">
					<h2 class="hl_3 mincho mb20">LINE（ビデオ通話）登録面談の流れ</h2>
					<h3 class="mb20">①上記カレンダーまたは電話にて予約ください。</h3>
					<h3>②LINEのご準備</h3>
					<p class="mb20">こちらからメールにて友達追加のURLをお送りいたしますので登録面談日までに追加してください。<br>
					<a href="#flow2">【詳しくは下記のLINEビデオ通話の手順をご確認ください】</a></p>
					<h3>③ご登録面談</h3>
					<p>面談開始10分前にご準備状況のご確認でお電話させていただきます。<br>お時間になりましたらLINEのビデオ通話で発信いたしますので応答いただき、LINEでのご登録面談となります。<br>面談が終わりましたらLINEで使用している弊社端末からは速やかに情報を削除いたしますのでご安心ください。</p>
				</div>
				<div class="wrapper-t" id="flow2">
					<h2 class="hl_3 mincho mb30">LINEビデオ通話の手順（画面のスクリーンショットはiPhoneです）</h2>
					<h3 class="mb20">①LINEアプリの「マイク」「カメラ」へのアクセスを確認し、「OFF」の場合は「ON」に設定します。</h3>
					<div class="row mb50">
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow1.jpg" alt="LINEオンライン面談予約">
							<p>1,[設定]をタップ</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow2.jpg" alt="LINEオンライン面談予約">
							<p>2,[LINE]をタップ</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow3.jpg" alt="LINEオンライン面談予約">
							<p>3,「マイク」と「カメラ」の設定を確認し、「OFF」になっている場合は「ON」に設定する。</p>
						</div>
					</div>
					<h3 class="mb20">②LINEがインストールされているご利用の端末から、お送りしたメールにある「友だち追加のURL」で「TAG school」を友だちに追加する。</h3>
					<div class="row mb50">
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow4.jpg" alt="LINEオンライン面談予約">
							<p>1,メールの「友だち追加のURL」をタップすると下記画面になるので[LINEアプリを開く]をタップ</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow5.jpg" alt="LINEオンライン面談予約">
							<p>2,「”LINE”で開きますか？」で[開く]をタップ</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow6.jpg" alt="LINEオンライン面談予約">
							<p>3,「友だちを追加」で[追加]をタップ</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow7.jpg" alt="LINEオンライン面談予約">
							<p>4,友だちに「TAG school」が追加されます。追加されると、弊社のLINEアカウントに通知されますので、こちらでも友だちに追加させていただきます。</p>
						</div>
						<div class="col-xs-4 height-1 mb20">
							<img src="/common/image/contents/online-consultation/flow8.jpg" alt="LINEオンライン面談予約">
							<p>【補足】LINEがインストールされていないPC等から「友だち追加のURL」を開いた場合は「QRコードでLINEの友だちを追加 」の画面が表示されます。</p>
						</div>
					</div>
					<h3 class="mb20">③登録面談の時間になりましたら、弊社よりLINEのビデオ通話で連絡させていただきますので、応答してください。</h3>
					<div class="row">
						<div class="col-xs-4 height-1">
							<img src="/common/image/contents/online-consultation/flow9.jpg" alt="LINEオンライン面談予約">
							<p>右下の[緑のカメラマーク]をタップして応答してください。</p>
						</div>
					</div>
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
