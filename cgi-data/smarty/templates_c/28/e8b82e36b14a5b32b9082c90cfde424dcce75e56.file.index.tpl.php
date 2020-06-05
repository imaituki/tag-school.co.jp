<?php /* Smarty version Smarty-3.1.18, created on 2020-03-19 12:55:10
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16336556435e2aae38747ad1-07740953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1581928035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16336556435e2aae38747ad1-07740953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2aae387712e0_26267950',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    '_DIR_NAME' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2aae387712e0_26267950')) {function content_5e2aae387712e0_26267950($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="top_28">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common">
			<div class="center">
				<h2 class="hl_3 mincho"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</h2>
				<div class="center">
					<div class="row">
						<div class="col-xs-4 mb20">
							<div class="unit">
								<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/article/">
									<p class="image pos_ac"><i class="fa fa-book" aria-hidden="true"></i></p>
									<p class="text pos_ac">ブログ</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4 mb20">
							<div class="unit">
								<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/edit/">
									<p class="image pos_ac"><i class="fa fa-id-card" aria-hidden="true"></i></p>
									<p class="text pos_ac">会員情報編集</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4 mb20">
							<div class="unit">
								<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/logout.php">
									<p class="image pos_ac"><i class="fas fa-sign-out-alt"></i></p>
									<p class="text pos_ac">ログアウト</p>
								</a>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="unit unsubscribe">
								<a href="/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/unsubscribe/">
									<p class="image pos_ac"><i class="far fa-times-circle"></i></p>
									<p class="text pos_ac">退会</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>'mypage'), 0);?>

</div>
</body>
</html>
<?php }} ?>
