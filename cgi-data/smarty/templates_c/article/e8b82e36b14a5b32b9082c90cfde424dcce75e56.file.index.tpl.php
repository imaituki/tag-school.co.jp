<?php /* Smarty version Smarty-3.1.18, created on 2020-01-17 11:59:52
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12050136675e156bb834c7a9-20831305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579229975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12050136675e156bb834c7a9-20831305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e156bb83a1fe3_27829616',
  'variables' => 
  array (
    'template_meta' => 0,
    '_FRONT' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    't_article' => 0,
    'data' => 0,
    'OptionArticleCategory' => 0,
    'link' => 0,
    'arr_get' => 0,
    '_IMAGEFULLPATH' => 0,
    'page_navi' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e156bb83a1fe3_27829616')) {function content_5e156bb83a1fe3_27829616($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
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
								<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
									<div>
										<div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],'%Y/%m/%d');?>
</div>
										<div><?php echo $_smarty_tpl->tpl_vars['OptionArticleCategory']->value[$_smarty_tpl->tpl_vars['data']->value['id_article_category']];?>
</div>
										<div>
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_article'];?>
<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>&page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
										</div>
										<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])) {?>
										<div>
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_article'];?>
<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>&page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>">
												<img src="<?php echo $_smarty_tpl->tpl_vars['_IMAGEFULLPATH']->value;?>
/article/image1/s_<?php echo $_smarty_tpl->tpl_vars['data']->value['image1'];?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" />
											</a>
										</div>
										<?php }?>
									</div>
								<?php } ?>
							</section>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['page_navi']->value['PageTotal']>1) {?>
						<div class="pagenation yu-mincho mb100">
							<ul>
								<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkBack'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkBack'];?>
<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkPage'];?>

								<?php if ((($tmp = @$_smarty_tpl->tpl_vars['page_navi']->value['LinkNext'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo $_smarty_tpl->tpl_vars['page_navi']->value['LinkNext'];?>
<?php }?>
							</ul>
						</div><!--//.pagenation-->
						<?php }?>
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
