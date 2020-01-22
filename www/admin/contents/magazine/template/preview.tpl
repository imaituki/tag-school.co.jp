<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{$magazine.title}｜メール配信管理</title>
<link rel="stylesheet" type="text/css" href="/primary/admin/common/css/style.css" />
<script type="text/javascript" src="/primary/admin/common/js/script.js"></script>
<style type="text/css">
{$message.css}
</style>
</head>
<body style="background:none;">
<div style="width:500px; word-break:break-all;">
	<div style="width:100%; background:#FFDDCC; padding: 5px 0px 5px 5px;">
		<strong>件名：{$magazine.title}</strong>
	</div>
	{$magazine.header}
	<br />
	<br />
	○○○○様<br />
	<br />
	<br />
	{$magazine.main}
{*	<br />
	----------<br />
	メール配信の登録解除は下記URLより申請ください。<br />
	http://www.../mobile/edit2.php?id=0&amp;mail=xxx@xxxx.ne.jp<br />*}
	<br />
	{$magazine.footer}
</div>
</body>
</html>
