<?php /* Smarty version Smarty-3.1.18, created on 2020-07-02 19:09:04
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11224063835eddd2bac7cb49-16931879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1593684538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11224063835eddd2bac7cb49-16931879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eddd2bac8d977_34398022',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_teacher' => 0,
    'teacher' => 0,
    'mst_calendar' => 0,
    'calendar' => 0,
    'OptionWeek' => 0,
    'OptionReserveTime' => 0,
    'time' => 0,
    'teacher_id' => 0,
    'day' => 0,
    'time_id' => 0,
    'reserved' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eddd2bac8d977_34398022')) {function content_5eddd2bac8d977_34398022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
				<p class="mb30">下記予約カレンダーより日付をクリックしてご予約下さい。<br>日付をクリックすると空き時間が確認できます。</p>


				<?php  $_smarty_tpl->tpl_vars["teacher"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["teacher"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_teacher']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["teacher"]->key => $_smarty_tpl->tpl_vars["teacher"]->value) {
$_smarty_tpl->tpl_vars["teacher"]->_loop = true;
?>
					<h2 class="hl_4 mincho mb20">
						<?php if (!empty($_smarty_tpl->tpl_vars['teacher']->value['url'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>

						<?php }?>
					</h2>

					<div class="content wrap tbl_calendar mb50">
						<p class="pos_ac fw_bold mb10 month">
							<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],'%Y-%m-%d')>=date("Y-m-d")) {?>
								<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%m");?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['back_week'],"%d");?>
">&lt;&lt;</a>
							<?php } elseif (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],'%Y-%m-%d')==date("Y-m-d")) {?>
								<span>&lt;&lt;</span>
							<?php } else { ?>
								<a href="./index.php?y=<?php echo date("Y");?>
&m=<?php echo date("m");?>
&d=<?php echo date("d");?>
">&lt;&lt;</a>
							<?php }?>
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date'],"%Y&#24180;%m&#26376;%d&#26085;");?>
～<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['display_date_end'],"%Y&#24180;%m&#26376;%d&#26085;");?>

	<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],'%Y-%m-%d')>=smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_limit'],'%Y-%m-%d')) {?>
	<span>&gt;&gt;</span>
	<?php } else { ?>
							<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],'%Y-%m-%d')>=date("Y-m-d")&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],'%Y-%m-%d')<smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_limit'],'%Y-%m-%d')) {?>
								<a href="./index.php?y=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%Y");?>
&m=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%m");?>
&d=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mst_calendar']->value['next_week'],"%d");?>
">&gt;&gt;</a>
							<?php } else { ?>
								<span>&gt;&gt;</span>
							<?php }?>
	<?php }?>
						</p>
						<p class="pos_ar">「-」…予約不可　「〇」…予約可能</p>
						<table>
							<thead>
								<tr>
									<th></th>
									<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["ymd"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["ymd"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['calendar']->value['day'])) {?>
											<th><?php echo substr($_smarty_tpl->tpl_vars['calendar']->value['day'],5,2);?>
/<?php echo substr($_smarty_tpl->tpl_vars['calendar']->value['day'],8,2);?>
<br class="visible-xs">(<?php echo $_smarty_tpl->tpl_vars['OptionWeek']->value[$_smarty_tpl->tpl_vars['calendar']->value['week']];?>
)</th>
										<?php }?>
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
										<th><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</th>
										<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable(0, null, 0);?>
										<?php  $_smarty_tpl->tpl_vars["calendar"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["calendar"]->_loop = false;
 $_smarty_tpl->tpl_vars["ymd"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mst_calendar']->value['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["calendar"]->key => $_smarty_tpl->tpl_vars["calendar"]->value) {
$_smarty_tpl->tpl_vars["calendar"]->_loop = true;
 $_smarty_tpl->tpl_vars["ymd"]->value = $_smarty_tpl->tpl_vars["calendar"]->key;
?>
											<?php if (!empty($_smarty_tpl->tpl_vars['calendar']->value['day'])) {?>
												<?php $_smarty_tpl->tpl_vars['teacher_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['teacher']->value["id_online_consultation_teacher"], null, 0);?>
												<?php if ($_smarty_tpl->tpl_vars['reserved']->value[$_smarty_tpl->tpl_vars['teacher_id']->value][$_smarty_tpl->tpl_vars['day']->value][$_smarty_tpl->tpl_vars['time_id']->value]==1) {?>
													<td>予約済み</td>
												<?php } else { ?>
													<?php if ((($tmp = @$_smarty_tpl->tpl_vars['calendar']->value['resept'][$_smarty_tpl->tpl_vars['teacher_id']->value][$_smarty_tpl->tpl_vars['time_id']->value])===null||$tmp==='' ? '' : $tmp)==1) {?>
														<td><a href="./form.php?y=<?php echo substr($_smarty_tpl->tpl_vars['calendar']->value['day'],0,4);?>
&m=<?php echo substr($_smarty_tpl->tpl_vars['calendar']->value['day'],5,2);?>
&d=<?php echo substr($_smarty_tpl->tpl_vars['calendar']->value['day'],8,2);?>
&t=<?php echo $_smarty_tpl->tpl_vars['time_id']->value;?>
&teacher=<?php echo $_smarty_tpl->tpl_vars['teacher_id']->value;?>
">〇</a></td>
													<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['calendar']->value['resept'][$_smarty_tpl->tpl_vars['teacher_id']->value][$_smarty_tpl->tpl_vars['time_id']->value])===null||$tmp==='' ? '' : $tmp)==2) {?>
														<td>-</td>
													<?php } else { ?>
														<td>-</td>
													<?php }?>
												<?php }?>
											<?php }?>
											<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_variable($_smarty_tpl->tpl_vars['day']->value+1, null, 0);?>
										<?php } ?>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<p class="time mb50 ">※所要時間は平均で30分～45分程度となります。</p>
					</div>
				<?php } ?>
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
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow1.jpg" alt="LINEオンライン面談予約">
							<p>1,[設定]をタップ</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow2.jpg" alt="LINEオンライン面談予約">
							<p>2,[LINE]をタップ</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow3.jpg" alt="LINEオンライン面談予約">
							<p>3,「マイク」と「カメラ」の設定を確認し、「OFF」になっている場合は「ON」に設定する。</p>
						</div>
					</div>
					<h3 class="mb20">②LINEがインストールされているご利用の端末から、お送りしたメールにある「友だち追加のURL」で「TAG school」を友だちに追加する。</h3>
					<div class="row mb50">
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow4.jpg" alt="LINEオンライン面談予約">
							<p>1,メールの「友だち追加のURL」をタップすると下記画面になるので[LINEアプリを開く]をタップ</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow5.jpg" alt="LINEオンライン面談予約">
							<p>2,「”LINE”で開きますか？」で[開く]をタップ</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow6.jpg" alt="LINEオンライン面談予約">
							<p>3,「友だちを追加」で[追加]をタップ</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow7.jpg" alt="LINEオンライン面談予約">
							<p>4,友だちに「TAG school」が追加されます。追加されると、弊社のLINEアカウントに通知されますので、こちらでも友だちに追加させていただきます。</p>
						</div>
						<div class="col-xs-4 col-6 height-1_all mb20">
							<img src="/common/image/contents/online-consultation/flow8.jpg" alt="LINEオンライン面談予約">
							<p>【補足】LINEがインストールされていないPC等から「友だち追加のURL」を開いた場合は「QRコードでLINEの友だちを追加 」の画面が表示されます。</p>
						</div>
					</div>
					<h3 class="mb20">③登録面談の時間になりましたら、弊社よりLINEのビデオ通話で連絡させていただきますので、応答してください。</h3>
					<div class="row">
						<div class="col-xs-4 col-6 height-1_all">
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
