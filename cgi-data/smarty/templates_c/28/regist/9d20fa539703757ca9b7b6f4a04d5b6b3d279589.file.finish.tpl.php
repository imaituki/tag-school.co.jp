<?php /* Smarty version Smarty-3.1.18, created on 2020-03-12 02:37:25
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1046598395e2abfc31e1b56-89849099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1581928225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1046598395e2abfc31e1b56-89849099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2abfc3216698_93438107',
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    '_DIR_NAME' => 0,
    'template_header' => 0,
    '_FRONT' => 0,
    '_HTML_HEADER' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2abfc3216698_93438107')) {function content_5e2abfc3216698_93438107($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="/common/css/import.css" />
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php">28 ログイン</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common entry">
			<div class="center">
				<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['temp_var'])) {?>
					<h2 class="hl_3 mincho">会員仮登録を受付けました</h2>
					<p class="mb30">
						My Page会員に仮登録いただき、ありがとうございます。<br />
						まだ登録は完了しておりません。<br />
						<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
宛てに自動送信メールをお送りしました。<br />
						本登録用のURLをお送りいたしましたので、そちらから本登録を完了してください。
					</p>
					<p class="mb20">
						しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
						「ご入力いただいたメールアドレスが間違っている」<br>
						「迷惑メール対策による受信メールの自動削除設定」<br>
						「メールボックスの容量オーバー（特にフリーメール）」<br>
						「メールの受信制限や拒否設定（特に携帯メール）」
					</p>
					<p class="mb20">
						メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
						送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。
					</p>
				<?php } else { ?>
					<h2 class="hl_3 mincho">会員本登録を行いました</h2>
					<p class="mb10">
						My Page会員に本登録いただき、ありがとうございます。<br />
						ご登録いただいたメールアドレスとパスワードで、マイページにログインしてください。
					</p>
					<div class="pos_ac">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_FRONT']->value['home'];?>
/<?php echo $_smarty_tpl->tpl_vars['_DIR_NAME']->value;?>
/login.php" class="button _type1"><i class="fa fa-chevron-right"></i>ログイン画面に戻る</a>
					</div>
				<?php }?>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>'mypage'), 0);?>

</div>
</body>
</html><?php }} ?>
