<?php /* Smarty version Smarty-3.1.18, created on 2020-01-24 16:58:03
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551071105e2841816deeb6-48528950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1579852571,
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
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_HTML_HEADER' => 0,
    't_information' => 0,
    'data' => 0,
    'arr_get' => 0,
    'OptionCategory' => 0,
    'page_navi' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e28418173da54_82276346')) {function content_5e28418173da54_82276346($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tag-school/cgi-data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/top.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
" /></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main"><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</span><span class="sub"><?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
</span></h2>
			</div>
		</div>
	</div>
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
		<div class="wrapper bg_common" >
			<div class="center">
				<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
					<div class="info_box">
						<a class="ov" href="./detail.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_information'];?>
<?php if (is_numeric($_smarty_tpl->tpl_vars['arr_get']->value['page'])) {?>&page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>">
							<div class="photo img_rect">
								<img src="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['image1'])) {?>/common/photo/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/image1/m_<?php echo $_smarty_tpl->tpl_vars['data']->value['image1'];?>
<?php } else { ?>/common/image/contents/null.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" />
							</div>
							<div class="text">
								<div class="disp_td">
									<p class="mb10">
										<span class="tag"><?php echo $_smarty_tpl->tpl_vars['OptionCategory']->value[$_smarty_tpl->tpl_vars['data']->value['id_category']];?>
</span>
										<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],'%Y.%m.%d');?>
</span>
									</p>
									<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>
								</div>
							</div>
						</a>
					</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['data']->_loop) {
?>
					<div class="info_box">
						<div class="text">
							<h3>お知らせは準備中です</h3>
						</div>
					</div>
				<?php } ?>
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
