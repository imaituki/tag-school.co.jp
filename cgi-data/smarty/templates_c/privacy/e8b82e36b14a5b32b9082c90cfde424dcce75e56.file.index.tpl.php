<?php /* Smarty version Smarty-3.1.18, created on 2020-01-30 14:39:57
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13207818025e295290098406-77290275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1580361535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13207818025e295290098406-77290275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2952900b8254_60524848',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    '_INFO' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2952900b8254_60524848')) {function content_5e2952900b8254_60524848($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="privacy">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/privacy/top.jpg" alt="プライバシーポリシ"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">プライバシーポリシ</span><span class="sub">Privacy Policy</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>プライバシーポリシ</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common privacy" >
			<div class="center">
				<h2 class="hl_3 mincho">個人情報保護方針</h2>
				<p class="mb20 c_g">株式会社TAG Corporation28（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
				<div class="box bg0">
					<h3 class="hl_2">1. 個人情報の管理</h3>
					<p class="mb50 c_g">当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
					<h3 class="hl_2">2.個人情報の利用目的</h3>
					<p class="mb50 c_g">お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
					<h3 class="hl_2">3.個人情報の第三者への開示・提供の禁止</h3>
					<p class="mb50 c_g">当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
					・お客さまの同意がある場合<br>
					・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>
					・法令に基づき開示することが必要である場合</p>
					<h3 class="hl_2">4.個人情報の安全対策</h3>
					<p class="mb50 c_g">当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
					<h3 class="hl_2">5.ご本人の照会</h3>
					<p class="mb50 c_g">お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
					<h3 class="hl_2">6.法令、規範の遵守と見直し</h3>
					<p class="mb50 c_g">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
					<h3 class="hl_2">7.お問い合わせ</h3>
					<p class="mb10 c_g">当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
					<p class="mb50 c_g"><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['site_name'];?>
<br />
						〒<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['zip'];?>
 <?php echo nl2br($_smarty_tpl->tpl_vars['_INFO']->value['address']);?>
<br />
						TEL：<span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['tel'];?>
</span><?php if ($_smarty_tpl->tpl_vars['_INFO']->value['fax']) {?>　FAX：<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['fax'];?>
<?php }?><br>
						E-mail：<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['_INFO']->value['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['_INFO']->value['mail'];?>
</a>
					</p>
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
