<?php /* Smarty version Smarty-3.1.18, created on 2020-02-05 17:01:08
         compiled from "../template/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15853325495e13073a6b8dd0-68675221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed0079e453c3211dcc3c04fc32581d09df2c044' => 
    array (
      0 => '../template/test.tpl',
      1 => 1580888800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15853325495e13073a6b8dd0-68675221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e13073a722da3_12709227',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    '_CONTENTS_DIR' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    '_CONTENTS_ID' => 0,
    'data' => 0,
    'message' => 0,
    'arr_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e13073a722da3_12709227')) {function content_5e13073a722da3_12709227($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>管理画面</title>
		<link href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/css/import.css" rel="stylesheet" />
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/lightbox/import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/plugins/datepicker/bootstrap-datepicker-import.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/js/list.js"></script>
	</head>
	<body class="fixed-sidebar no-skin-config">
		<div id="wrapper">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>'mypage','manage'=>$_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value), 0);?>

			<div id="page-wrapper" class="gray-bg">
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-lg-10">
						<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
						<ol class="breadcrumb">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/">Home</a></li>
							<li><a href="./"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</a></li>
							<li class="active"><strong>テスト送信</strong></li>
						</ol>
					</div>
					<div class="col-lg-2 m-b-xs pos_ar mt30">
						<a href="./send.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['_CONTENTS_ID']->value];?>
" class="btn btn-primary btn-s">本番送信画面</a>
					</div>
				</div>
				<div class="wrapper wrapper-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-content">
									<div id="msg" <?php if ($_smarty_tpl->tpl_vars['message']->value==null) {?> style="display:none"<?php }?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="error mb20"<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?> class="ok mb20"<?php }?>><?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'])===null||$tmp==='' ? '' : $tmp)!=null) {?><i class="icon-attention"></i> <?php echo $_smarty_tpl->tpl_vars['message']->value['ng'];?>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ok'])===null||$tmp==='' ? '' : $tmp)!=null) {?><i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['message']->value['ok'];?>
<?php }?></div>
									<form action="./test_send.php" method="post">
										<div id="searchList">
											<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
												<tbody>
													<tr>
														<th class="pos_ac">タイトル</th>
														<td><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>
													</tr>
													<tr>
														<th class="pos_ac">本文</th>
														<td>
															<?php echo nl2br($_smarty_tpl->tpl_vars['data']->value['header']);?>
<br />
															<br />
															○○○○様<br />
															<br />
															<?php echo nl2br($_smarty_tpl->tpl_vars['data']->value['main']);?>
<br />
															<br />
															<?php echo nl2br($_smarty_tpl->tpl_vars['data']->value['footer']);?>

														</td>
													</tr>
													<tr>
														<th class="pos_ac">管理メール以外に送信</th>
														<td>
															<input type="text" class="text w500" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" />
														</td>
													</tr>
												</tbody>
											</table>
											<div class="hr-line-dashed"></div>
											<div class="button clearfix mb20">
												<div class="form-group">
													<div class="fl_right">
														<input type="submit" name="submit" class="btn" value="テスト送信する" />
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html><?php }} ?>
