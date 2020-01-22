<?php /* Smarty version Smarty-3.1.18, created on 2020-01-14 18:52:04
         compiled from "../template/send.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18080475815e145a8c741959-82615977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdac64b43d3ee8e66529a51d1bd79519260bc2e' => 
    array (
      0 => '../template/send.tpl',
      1 => 1578989944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18080475815e145a8c741959-82615977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e145a8c76ec08_78481872',
  'variables' => 
  array (
    '_ADMIN' => 0,
    'template_javascript' => 0,
    'template_secondary' => 0,
    '_CONTENTS_DIR' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
    'magazine' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e145a8c76ec08_78481872')) {function content_5e145a8c76ec08_78481872($_smarty_tpl) {?><!DOCTYPE html>
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
							<li><a href="./test.php">テスト送信</a></li>
							<li class="active"><strong>本番送信画面</strong></li>
						</ol>
					</div>
				</div>
				<div class="wrapper wrapper-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-content">
									<p class="mb20">
										メールの配信を行います。<br />
									</p>
									<div id="msg" class="error">
										会員数によっては、送信に時間がかかることがあります。<br />
										<strong>画面が切り替わるまで絶対にこのウィンドウを閉じないで下さい。</strong>
									</div>
									<form action="./send_magazine.php" method="post">
										<div id="searchList">
											<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
												<tbody>
													<tr>
														<th width="150">配信メールの登録</th>
														<td><span class="c_blue">登録完了</span> [<?php echo $_smarty_tpl->tpl_vars['magazine']->value['title'];?>
]</td>
													</tr>
												</tbody>
											</table>
											<div class="hr-line-dashed"></div>
											<div class="button clearfix mb20">
												<div class="form-group">
													<div class="fl_right">
														<input type="submit" name="submit" class="btn" onclick="if( confirm('送信処理を行います。よろしいですか？') ) { this.form.action='./send_magazine.php' } else { return false; }" value="メールを送信する" />
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
