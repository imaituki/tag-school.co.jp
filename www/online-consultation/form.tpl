<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
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
				<h2 class="hl_3 mincho">LINEオンライン面談予約</h2>
				<p class="mb20 c_g">下記項目にご入力ください。「必須」印は入力必須項目です。<br>入力後、一番下の「 入力内容を確認する」ボタンをクリックしてください。</p>
				<form action="./check.php#form" method="post">
					<table class="tbl_form">
						<tbody>
							<tr class="first">
								<th>面談希望日時<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.date)}<span class="error">※{$message.ng.date}</span>{/if}
									{if !empty($message.ng.time)}<span class="error">※{$message.ng.time}</span>{/if}
									{$arr_post.date|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}({$OptionWeek[$arr_post.date|date_format:"w"]}) {if !empty($OptionReserveTime[$arr_post.time])}{$OptionReserveTime[$arr_post.time]}{/if}
									<input type="hidden" name="date" value="{$arr_post.date}" />
									<input type="hidden" name="time" value="{$arr_post.time}" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.name2)}<span class="error">※{$message.ng.name2}</span>{/if}
									<input type="text" name="name2" value="{$arr_post.name2|default:''}" />
								</td>
							</tr>
							<tr>
								<th>保護者氏名(フリガナ)<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.ruby2)}<span class="error">※{$message.ng.ruby2}</span>{/if}
									<input type="text" name="ruby2" value="{$arr_post.ruby2|default:''}" />
								</td>
							</tr>
							<tr>
								<th>Eメールアドレス<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.mail)}<span class="error">※{$message.ng.mail}</span>{/if}
									<input type="email" name="mail" value="{$arr_post.mail|default:''}" />
								</td>
							</tr>
							<tr>
								<th>電話番号<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.tel)}<span class="error">※{$message.ng.tel}</span>{/if}
									<input type="tel" name="tel" value="{$arr_post.tel|default:''}" />
								</td>
							</tr>
							<tr>
								<th class="pos-vt">住所</th>
								<td>
									<dl>
										{if !empty($message.ng.zip)}<span class="error">※{$message.ng.zip}</span>{/if}
										<dt>郵便番号</dt>
										<dd>
											<input name="zip" value="{$arr_post.zip|default:''}" type="text" class="zip w150" placeholder="000-000" >
											<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');" class="bTn wp100 w_sm_A dis_b dis_sm_ib zip_block"><i class="fa fa-search" aria-hidden="true"></i>郵便番号から住所を自動入力する</a>
										</dd>
									</dl>
									{if !empty($message.ng.prefecture)}<span class="error">※{$message.ng.prefecture}</span>{/if}
									<dl>
										<dt>都道府県</dt>
										<dd>
											{html_select_ken name="prefecture" class="form-control inline input-s" selected=$arr_post.prefecture|default:"0"}
										</dd>
									</dl>
									{if !empty($message.ng.address)}<span class="error">※{$message.ng.address}</span>{/if}
									<dl>
										<dt>住所</dt>
										<dd class="w-420">
											<input name="address" value="{$arr_post.address|default:''}" type="text">
										</dd>
									</dl>
								</td>
							</tr>
							<tr>
								<th>児童・生徒氏名</th>
								<td>
									{if !empty($message.ng.name1)}<span class="error">※{$message.ng.name1}</span>{/if}
									<input type="text" name="name1" value="{$arr_post.name1|default:''}" />
								</td>
							</tr>
							<tr>
								<th>児童・生徒氏名(フリガナ)</th>
								<td>
									{if !empty($message.ng.ruby1)}<span class="error">※{$message.ng.ruby1}</span>{/if}
									<input type="text" name="ruby1" value="{$arr_post.ruby1|default:''}" />
								</td>
							</tr>
							<tr>
								<th>性別<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.sex)}<span class="error">※{$message.ng.sex}</span>{/if}
									<select name="sex">
										<option value="">選択してください。</option>
										{html_options options=$OptionSex selected=$arr_post.sex}
									</select>
								</td>
							</tr>
							<tr>
								<th>学年<span class="need">必須</span></th>
								<td>
									{if !empty($message.ng.grade)}<span class="error">※{$message.ng.grade}</span>{/if}
									<select name="grade">
										<option value="">選択してください。</option>
										{html_options options=$OptionGrade selected=$arr_post.grade}
									</select>
								</td>
							</tr>
							<tr class="last">
								<th>面談で相談したい内容</th>
								<td>
									{if !empty($message.ng.comment)}<span class="error">※{$message.ng.comment}</span>{/if}
									<textarea name="comment" style="min-height:200px;">{$arr_post.comment|default:''}</textarea>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="row form_button">
						<div class="col-xs-6 mb20 pos_al">
							<a href="./timetable.php?y={$arr_post.date|date_format:'%Y'}&m={$arr_post.date|date_format:'%m'}&d={$arr_post.date|date_format:'%d'}&w={$arr_post.date|date_format:'%w'}" class="button _back"><i class="fa fa-chevron-left"></i>時間選択に戻る</a>
						</div>
						<div class="col-xs-6 pos_ar">
							<button class="button" type="submit">入力内容を確認する<i class="fa fa-chevron-right"></i></button>
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
