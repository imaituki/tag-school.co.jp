<?php /* Smarty version Smarty-3.1.18, created on 2020-07-07 14:56:31
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848399095e294a723ab465-43359926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1594101387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848399095e294a723ab465-43359926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e294a723c4e42_99794961',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    'data' => 0,
    'OptionCategory' => 0,
    '_IMAGEFULLPATH' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e294a723c4e42_99794961')) {function content_5e294a723c4e42_99794961($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/top.jpg" alt="新着情報" /></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">新着情報</span><span class="sub"><?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="./">新着情報</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				<div class="box bg0">
					<div class="box_in">
						<div class="mb20">
							<span class="tag"><?php echo $_smarty_tpl->tpl_vars['OptionCategory']->value[$_smarty_tpl->tpl_vars['data']->value['id_category']];?>
</span>
							<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],'%Y.%m.%d');?>
</span>
						</div>
						<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
						<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])) {?>
						<div class="pos_ac mb50">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image1/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image1'];?>
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
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image2/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image2'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image2/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image3'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image3/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image3'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image3/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image4'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image4/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image4'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image4/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image5'])) {?>
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image5/l_<?php echo $_smarty_tpl->tpl_vars['data']->value['image5'];?>
" rel="lightbox">
									<div class="img_rect"><img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image5/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></div>
								</a>
							</div>
							<?php }?>
						</div>
						<?php }?>
						<div class="row file">
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['file1'])) {?>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/file1/<?php echo $_smarty_tpl->tpl_vars['data']->value['file1'];?>
" target="_blank"><i class="fas fa-file"></i><?php echo $_smarty_tpl->tpl_vars['data']->value['file1_caption'];?>
</a></p>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['file2'])) {?>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/file2/<?php echo $_smarty_tpl->tpl_vars['data']->value['file2'];?>
" target="_blank"><i class="fas fa-file"></i><?php echo $_smarty_tpl->tpl_vars['data']->value['file2_caption'];?>
</a></p>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div class="pos_ac">
					<a href="./<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>?page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>" class="button _type1"><i class="fa fa-chevron-left"></i>一覧へ戻る</a>
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
