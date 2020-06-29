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
										{$arr_post.date|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}({$OptionWeek[$arr_post.date|date_format:"w"]}) {$OptionReserveTime[$arr_post.time]}
										<input type="hidden" name="date" value="{$arr_post.date}">
										<input type="hidden" name="time" value="{$arr_post.time}">
									</td>
								</tr>
								<tr>
									<th>担当講師</th>
									<td>
										{$OptionTeacher[$arr_post.teacher]}
										<input type="hidden" name="teacher" value="{$arr_post.teacher}">
									</td>
								</tr>
								<tr>
									<th>保護者氏名</th>
									<td>
										{$arr_post.name2|default:''}
										<input type="hidden" name="name2" value="{$arr_post.name2|default:''}" />
									</td>
								</tr>
								<tr>
									<th>保護者氏名(フリガナ)</th>
									<td>
										{$arr_post.ruby2|default:''}
										<input type="hidden" name="ruby2" value="{$arr_post.ruby2|default:''}" />
									</td>
								</tr>
								<tr>
									<th>Eメールアドレス</th>
									<td>
										{$arr_post.mail|default:''}
										<input type="hidden" name="mail" value="{$arr_post.mail|default:''}" />
									</td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td>
										{$arr_post.tel|default:''}
										<input type="hidden" name="tel" value="{$arr_post.tel|default:''}" />
									</td>
								</tr>
								<tr>
									<th class="pos-vt">住所</th>
									<td>
										{if !empty($arr_post.zip) || !empty($arr_post.prefecture) || !empty($arr_post.address)}
											{if $arr_post.zip}〒{$arr_post.zip}<br>{/if}
											{if $arr_post.prefecture != 0}{html_select_ken selected=$arr_post.prefecture pre=1}{/if} {$arr_post.address}
										{else}
											--
										{/if}
										<input type="hidden" name="zip" value="{$arr_post.zip}">
										<input type="hidden" name="prefecture" value="{$arr_post.prefecture}">
										<input type="hidden" name="address" value="{$arr_post.address}">
									</td>
								</tr>
								<tr>
									<th>児童・生徒氏名</th>
									<td>
										{$arr_post.name1|default:'--'}
										<input type="hidden" name="name1" value="{$arr_post.name1|default:''}" />
									</td>
								</tr>
								<tr>
									<th>児童・生徒氏名(フリガナ)</th>
									<td>
										{$arr_post.ruby1|default:'--'}
										<input type="hidden" name="ruby1" value="{$arr_post.ruby1|default:''}" />
									</td>
								</tr>
								<tr>
									<th>性別</th>
									<td>
										{$OptionSex[$arr_post.sex]}
										<input type="hidden" name="sex" value="{$arr_post.sex|default:''}" />
									</td>
								</tr>
								<tr>
									<th>学年</th>
									<td>
										{$OptionGrade[$arr_post.grade]}
										<input type="hidden" name="grade" value="{$arr_post.grade|default:''}" />
									</td>
								</tr>
								<tr class="last">
									<th>お問い合わせ内容</th>
									<td>
										{$arr_post.comment|nl2br|default:'--'}
										<input type="hidden" name="comment" value="{$arr_post.comment|default:''}" />
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row form_button">
							<div class="col-xs-6 mb20 pos_al">
								<button class="button _back" onclick="this.form.action='./_form.php'"><i class="fa fa-chevron-left"></i>修正する</button>
							</div>
							<div class="col-xs-6 pos_ar">
								<input type="hidden" name="referer" value="1" />
								<input type="hidden" name="status" value="0" />
								<!-- <button id="send_button" class="button" type="submit">送信する<i class="fa fa-chevron-right"></i></button> -->
								<button id="" class="button" type="submit" onclick="$(this).attr('formaction', './_send.php');">送信する<i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
					</form>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
