<?php /* Smarty version Smarty-3.1.18, created on 2020-03-19 12:55:13
         compiled from "/home/tag-school/www//common/include/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19695591415e295866647322-77692349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f6fdaef15088846bff77147fa4b53b49cc4e6f' => 
    array (
      0 => '/home/tag-school/www//common/include/footer.tpl',
      1 => 1581933318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19695591415e295866647322-77692349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e295866648721_70922542',
  'variables' => 
  array (
    '_INFO' => 0,
    '_FRONT' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e295866648721_70922542')) {function content_5e295866648721_70922542($_smarty_tpl) {?><footer>
	<div id="foot_contact" class="wrapper-t center mb50">
		<div class="contact_area">
			<div class="row">
				<div class="col-xs-6">
					<div class="tel_unit">
						<h4>お電話でのお問い合わせ</h4>
						<span class="tel sans" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><i class="fa fa-phone-alt"></i><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span>
					</div>
				</div>
				<div class="col-xs-6">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/contact/" class="ov btn_foot_contact"><i class="fa fa-envelope"></i>お問い合わせ</a>
				</div>
			</div>
		</div>
	</div>
	<div id="foot_banner" class="wrapper center">
		<div class="banner_area">
			<div class="row">
				<div class="col-xs-6">
					<a href="https://ok-school.jp/" class="ov ga_link" target="_blank"><img src="/common/image/foot/banner_1.jpg" alt="OKschool"></a>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['mode']->value!="mypage") {?>
				<div class="col-xs-6">
					<a href="https://www.earth-8.com/aschool/" class="ov ga_link" target="_blank"><img src="/common/image/foot/banner_2.jpg" alt="aschool"></a>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<div id="foot" class="bg_l_brown">
		<div class="row">
			<div class="col-lg-4 col-md-5 col-xs-6">
				<div class="address_unit height-1">
					<div class="disp_td">
						<h5><a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/"><img src="/common/image/foot/logo.png" alt="岡山の学習塾 TAG school" /></a></h5>
						<h5 class="mb0"><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['site_name'];?>
</h5>
						<p class="mb20">〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>
 <?php echo nl2br($_smarty_tpl->tpl_vars['_INFO']->value['address']);?>
 <span class="parking">【駐車場・駐輪場完備】</span></p>
						<p class="mb20">TEL：<span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span><br />
							<?php if ($_smarty_tpl->tpl_vars['_INFO']->value['fax']) {?>FAX：<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<br /><?php }?>
							E-MAIL：<span class="mailaddress"></span><br />
							営業時間：<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['worktime'];?>
<br />
							定休日：<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['holiday'];?>

						</p>
						<div class="sns">
							<a href="https://www.facebook.com/tagschool0902" target="_blank" class="fa ga_link"><i class="fab fa-facebook-f"></i></a>
							<a href="https://twitter.com/tagschool28" target="_blank" class="twitter ga_link"><i class="fab fa-twitter"></i></a>
							<a href="https://www.instagram.com/tagschool_28/" target="_blank" class="instagram ga_link"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-7 col-xs-6">
				<div class="map height-1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.726125198656!2d133.89921741553107!3d34.636360694168445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554077e656f7c35%3A0x1fd53dc136b6ccc9!2z44CSNzAwLTA5NzMg5bKh5bGx55yM5bKh5bGx5biC5YyX5Yy65LiL5Lit6YeO77yR77yS77yQ77yQ4oiS77yUIDVG!5e0!3m2!1sja!2sjp!4v1579698200308!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright" class="bg_brown">
		<div class="center">
			<div class="row">
				<div class="col-xs-4 col-xs-push-8">
					<div class="foot_sub_navi">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/privacy/" class="c0">プライバシーポリシー</a>
					</div>
				</div>
				<div class="col-xs-8 col-xs-pull-4">
					<p>&copy; 2020 岡山の集団&times;個別指導塾 TAG school（タッグスクール） All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="pagetop"><a href="javascript:void(0);"><span><img src="/common/image/foot/page_top.png" alt="page top"></span></a></div>
</footer>
<script>
$(document).ready(function(){
    $(".mailaddress").append( atob("<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['mail_base64'];?>
") );
});
</script>
<?php }} ?>
