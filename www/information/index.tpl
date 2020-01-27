<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
</head>
<body id="{$_DIR_NAME}">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/top.jpg" alt="{$_HTML_HEADER.title}" /></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">{$_HTML_HEADER.title}</span><span class="sub">{$_DIR_NAME}</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				{foreach from=$t_information item=data}
					<div class="info_box">
						<a class="ov" href="./detail.php?id={$data.id_information}{if is_numeric($arr_get.page)}&page={$arr_get.page}{/if}">
							<div class="photo img_rect">
								<img src="{if !empty($data.image1)}/common/photo/{$_DIR_NAME}/image1/m_{$data.image1}{else}/common/image/contents/null.jpg{/if}" alt="{$data.title}" />
							</div>
							<div class="text">
								<div class="disp_td">
									<p class="mb10">
										<span class="tag">{$OptionCategory[$data.id_category]}</span>
										<span class="date">{$data.date|date_format:'%Y.%m.%d'}</span>
									</p>
									<h3>{$data.title}</h3>
								</div>
							</div>
						</a>
					</div>
				{foreachelse}
					<div class="info_box">
						<div class="text">
							<h3>お知らせは準備中です</h3>
						</div>
					</div>
				{/foreach}
				{if $page_navi.LinkPage}
					<div class="list_pager">
						<ul class="mt10">
							{$page_navi.LinkPage}
						</ul>
					</div>
				{/if}
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
