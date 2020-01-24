<?php /* Smarty version Smarty-3.1.18, created on 2020-01-24 10:28:05
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17284487795e296c89961840-55436284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579829276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17284487795e296c89961840-55436284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e296c8997bc25_38939038',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e296c8997bc25_38939038')) {function content_5e296c8997bc25_38939038($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="about">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/about/top.jpg" alt="TAG schoolについて"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">TAG schoolについて</span><span class="sub">About</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>TAG schoolについて</li>
			</ul>
		</div>
	</div>
	<section>
		<div id="about_1">
			<div class="photo img_back"><img src="/common/image/contents/about/image1.jpg" alt="TAG schoolについて"></div>
			<div class="text">
				<div class="center">
					<div class="text_in">
						<h2 class="c_brown mincho">TAG schoolは、岡山初の集団指導と<br>個別指導を融合した新総合学習塾です。<br>『わかる』から『できる』、そして『えらべる』へ<br>“今までにない学び”をご提供いたします。</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="about_2" class="wrapper center">
			ハードスキルうんぬん
		</div>
	</section>
	<section>
		<div id="about_3" class="wrapper">
			<div class="center">
				わかるからできるなんとか
				（仮トップのcss参考に）
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
