<?php /* Smarty version Smarty-3.1.18, created on 2020-01-23 13:57:48
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551071105e2841816deeb6-48528950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579755465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19551071105e2841816deeb6-48528950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e28418173da54_82276346',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'page_navi' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e28418173da54_82276346')) {function content_5e28418173da54_82276346($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="information">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/top.jpg" alt="新着情報"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">新着情報</span><span class="sub">information</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>新着情報</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['page_navi']->value['LinkPage']) {?>
				<div class="list_pager">
					<ul class="mt10">
						<?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'];?>

					</ul>
				</div>
				<?php }?>
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
