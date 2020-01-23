<?php /* Smarty version Smarty-3.1.18, created on 2020-01-23 17:05:43
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5161099185e1575f4da7828-74308378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1579687801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5161099185e1575f4da7828-74308378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e1575f4e83884_58408246',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    'data' => 0,
    'OptionArticleCategory' => 0,
    'link' => 0,
    '_IMAGEFULLPATH' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e1575f4e83884_58408246')) {function content_5e1575f4e83884_58408246($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/css/import.css" type="text/css" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/favicon/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/favicon/apple-touch-icon.png" />
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
" class="bottom">
		<a id="pagetop" name="pagetop"></a>
		<div id="base">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<section class="style--page_title">
			<div class="container">
				<div class="back">
					<h2 class="hl"><img src="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/image/content/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/title.png" alt="記事" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div>
									<div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],'%Y/%m/%d');?>
</div>
									<div><?php echo $_smarty_tpl->tpl_vars['OptionArticleCategory']->value[$_smarty_tpl->tpl_vars['data']->value['id_article_category']];?>
</div>
									<div>
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
									</div>
									<div><?php echo $_smarty_tpl->tpl_vars['data']->value['comment'];?>
</div>
									<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])||!empty($_smarty_tpl->tpl_vars['data']->value['image2'])||!empty($_smarty_tpl->tpl_vars['data']->value['image3'])||!empty($_smarty_tpl->tpl_vars['data']->value['image4'])||!empty($_smarty_tpl->tpl_vars['data']->value['image5'])) {?>
										<div class="row">
											<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])) {?>
											<div class="col-md-4">
												<a href="">
													<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image1/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image1'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['caption1'])===null||$tmp==='' ? '' : $tmp);?>
" />
												</a>
												<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['caption1'])) {?><div><?php echo $_smarty_tpl->tpl_vars['data']->value['caption1'];?>
</div><?php }?>
											</div>
											<?php }?>
											<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image2'])) {?>
											<div class="col-md-4">
												<a href="">
													<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image2/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image2'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['caption2'])===null||$tmp==='' ? '' : $tmp);?>
" />
												</a>
												<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['caption2'])) {?><div><?php echo $_smarty_tpl->tpl_vars['data']->value['caption2'];?>
</div><?php }?>
											</div>
											<?php }?>
											<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image3'])) {?>
											<div class="col-md-4">
												<a href="">
													<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image3/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image3'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['caption3'])===null||$tmp==='' ? '' : $tmp);?>
" />
												</a>
												<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['caption3'])) {?><div><?php echo $_smarty_tpl->tpl_vars['data']->value['caption3'];?>
</div><?php }?>
											</div>
											<?php }?>
											<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image4'])) {?>
											<div class="col-md-4">
												<a href="">
													<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image4/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image4'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['caption4'])===null||$tmp==='' ? '' : $tmp);?>
" />
												</a>
												<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['caption4'])) {?><div><?php echo $_smarty_tpl->tpl_vars['data']->value['caption4'];?>
</div><?php }?>
											</div>
											<?php }?>
											<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image5'])) {?>
											<div class="col-md-4">
												<a href="">
													<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image5/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image5'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['caption5'])===null||$tmp==='' ? '' : $tmp);?>
" />
												</a>
												<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['caption5'])) {?><div><?php echo $_smarty_tpl->tpl_vars['data']->value['caption5'];?>
</div><?php }?>
											</div>
											<?php }?>
										</div>
									<?php }?>
								</div>
							</section>
						</div>
						<div class="pagenation yu-mincho mb100">
							<a href="./<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>?page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>">一覧に戻る</a>
						</div><!--//.pagenation-->
					</div>
				</main>
			</div><!-- #body -->
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- #base -->
		<!-- JavaScript -->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/common/js/import.js"></script>
	</body>
</html><?php }} ?>
