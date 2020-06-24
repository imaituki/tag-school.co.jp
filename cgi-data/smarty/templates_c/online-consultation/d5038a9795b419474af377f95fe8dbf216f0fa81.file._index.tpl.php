<?php /* Smarty version Smarty-3.1.18, created on 2020-06-22 10:44:48
         compiled from "./_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12344858345eecc16adaa7c6-08962717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5038a9795b419474af377f95fe8dbf216f0fa81' => 
    array (
      0 => './_index.tpl',
      1 => 1592790287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12344858345eecc16adaa7c6-08962717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eecc16ae1a539_78443366',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'mst_calendar' => 0,
    'calendar' => 0,
    'key' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eecc16ae1a539_78443366')) {function content_5eecc16ae1a539_78443366($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
		<div class="wrapper bg_common" >
			<div class="center">
				<h2 class="hl_3 mincho">LINEでオンライン面談はじめました</h2>
				<p class="mb10">下記予約カレンダーより日付をクリックしてご予約下さい。<br>日付をクリックすると空き時間が確認できます。</p>
				<p class="mb30">当日の予約については、お電話でご相談ください。<br><a href="tel:0862424119" class="fw_bold"><i class="fas fa-phone-alt"></i>086-242-4119</a></p>
				<div class="content wrap tbl_calendar">
						<p class="pos_ac fw_bold mb10 month">
							<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_date'],'%Y-%m-1')>=date("Y-m-1")) {?>
								<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_date'],"%m");?>
">&lt;&lt;</a>
							<?php } else { ?>
								<span>&lt;&lt;</span>
							<?php }?>
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y&#24180;%m&#26376;");?>

<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],'%Y-%m-1')>=date("2020-08-1")) {?>
	<span>&gt;&gt;</span>
<?php } else { ?>
							<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],'%Y-%m-1')>=date("Y-m-1")&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],'%Y-%m-1')<smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_limit'],'%Y-%m-1')) {?>
								<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_date'],"%m");?>
">&gt;&gt;</a>
							<?php } else { ?>
								<span>&gt;&gt;</span>
							<?php }?>
<?php }?>
						</p>
						<table>
							<thead>
								<tr><th>日</th>
								<th>月</th>
								<th>火</th>
								<th>水</th>
								<th>木</th>
								<th>金</th>
								<th>土</th>
							</tr></thead>
							<tbody>
							<tr>
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
										<td class="none">&nbsp;</td>
									<?php endfor; endif; ?>
								<?php }?>
								<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['loopCalendar']['first']&&$_smarty_tpl->tpl_vars['calendar']->value['week']==0) {?>
									<tr>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['mst_calendar']->value['check_date']>=smarty_modifier_date_format($_smarty_tpl->tpl_vars['calendar']->value['day'],'%Y%m%d1830')||$_smarty_tpl->tpl_vars['calendar']->value['holiday']==1) {?>
								<td class="none"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
								<?php } else { ?>
								<td>
									<a href="./timetable.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%m");?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['calendar']->value['day'],"%d");?>
&w=<?php echo $_smarty_tpl->tpl_vars['calendar']->value['week'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a>
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
										<td class="none">&nbsp;</td>
									<?php endfor; endif; ?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['calendar']->value['week']==6) {?>
									</tr>
								<?php }?>
							<?php } ?>
							</tbody>
					</table>
					<p class="time mb50 ">※所要時間は平均で30分～45分程度となります。</p>
				</div>

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
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
