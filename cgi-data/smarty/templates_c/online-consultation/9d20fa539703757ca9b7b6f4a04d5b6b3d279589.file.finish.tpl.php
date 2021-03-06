<?php /* Smarty version Smarty-3.1.18, created on 2020-06-15 14:58:51
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10640024275edddcee22e274-73482829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1592200303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10640024275edddcee22e274-73482829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5edddcee2474a8_35024592',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5edddcee2474a8_35024592')) {function content_5edddcee2474a8_35024592($_smarty_tpl) {?><!DOCTYPE html>
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
				<h2 class="hl_3 mincho">LINEオンライン面談予約を完了しました</h2>
				<p class="mb20">ご入力いただいたメールアドレス<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['mail'])) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
)<?php }?>宛に、確認メールをお送りしておりますのでご確認ください。</p>
				<p class="mb20">
					しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
					「ご入力いただいたメールアドレスが間違っている」<br>
					「迷惑メール対策による受信メールの自動削除設定」<br>
					「メールボックスの容量オーバー（特にフリーメール）」<br>
					「メールの受信制限や拒否設定（特に携帯メール）」</p>
				<p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
					送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。</p>
				<p class="mb50">その他、何かご不明な点等ございましたら、お気軽にお問い合わせください。</p>
				<div class="pos_ac">
					<a href="/" class="button _type1"><i class="fa fa-chevron-right"></i>トップページに戻る</a>
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
