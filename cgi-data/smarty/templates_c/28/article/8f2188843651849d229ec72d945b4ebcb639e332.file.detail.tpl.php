<?php /* Smarty version Smarty-3.1.18, created on 2020-01-24 19:16:37
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21311468295e29627851d401-11498339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1579860996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21311468295e29627851d401-11498339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2962785d8f46_45592471',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_FRONT' => 0,
    '_HTML_HEADER' => 0,
    'data' => 0,
    'OptionArticleCategory' => 0,
    '_IMAGEFULLPATH' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2962785d8f46_45592471')) {function content_5e2962785d8f46_45592471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
_detail">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php">28 ログイン</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/article/">28</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				<h2 class="hl_3 mincho"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</h2>
				<div class="box bg0">
					<div class="box_in">
						<div class="mb20">
							<span class="tag"><?php echo $_smarty_tpl->tpl_vars['OptionArticleCategory']->value[$_smarty_tpl->tpl_vars['data']->value['id_category']];?>
</span>
							<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],'%Y.%m.%d');?>
</span>
						</div>
						<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
						<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])) {?>
						<div class="pos_ac mb50">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image1/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" />
						</div>
						<?php }?>
						<div class="entry mb50">
							<?php echo $_smarty_tpl->tpl_vars['data']->value['comment'];?>

						</div>
						<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image2'])||!empty($_smarty_tpl->tpl_vars['data']->value['image3'])||!empty($_smarty_tpl->tpl_vars['data']->value['image4'])||!empty($_smarty_tpl->tpl_vars['data']->value['image5'])) {?>
						<div class="row">
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image2'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image2/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image2'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image2/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image3'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image3/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image3'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image3/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image4'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image4/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image4'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image4/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image5'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image5/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image5'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image5/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div class="button _type_1">
					<a href="./<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>?page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>">
						<i class="fa fa-chevron-left"></i>一覧へ戻る
					</a>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
