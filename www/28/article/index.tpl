<!DOCTYPE html>
<html lang="ja">
	<head>
		{include file=$template_meta}
		<link rel="stylesheet" href="{$_FRONT.home}/common/css/import.css" type="text/css" />
		<link rel="shortcut icon" href="{$_FRONT.home}/common/favicon/favicon.ico" />
		<link rel="apple-touch-icon" href="{$_FRONT.home}/common/favicon/apple-touch-icon.png" />
		{include file=$template_javascript}
	</head>
	<body id="{$_DIR_NAME}" class="bottom">
		<a id="pagetop" name="pagetop"></a>
		<div id="base">
			{include file=$template_header}
			<section class="style--page_title">
			<div class="container">
				<div class="back">
					<h2 class="hl"><img src="{$_FRONT.home}/common/image/content/{$_DIR_NAME}/title.png" alt="28" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								{foreach from=$t_article item=data}
									<div>
										<div>{$data.date|date_format:'%Y/%m/%d'}</div>
										<div>{$OptionArticleCategory[$data.id_article_category]}</div>
										<div>
											<a href="{$link}?id={$data.id_article}{if is_numeric($arr_get.page)}&page={$arr_get.page}{/if}">{$data.title}</a>
										</div>
										{if !empty($data.image1)}
										<div>
											<a href="{$link}?id={$data.id_article}{if is_numeric($arr_get.page)}&page={$arr_get.page}{/if}">
												<img src="{$_IMAGEFULLPATH}/article/image1/s_{$data.image1}" alt="{$data.title|default:''}" />
											</a>
										</div>
										{/if}
									</div>
								{/foreach}
							</section>
						</div>
						{if $page_navi.PageTotal > 1}
						<div class="pagenation yu-mincho mb100">
							<ul>
								{if $page_navi.LinkBack|default:"" != NULL}{$page_navi.LinkBack}{/if}
								{$page_navi.LinkPage}
								{if $page_navi.LinkNext|default:"" != NULL}{$page_navi.LinkNext}{/if}
							</ul>
						</div><!--//.pagenation-->
						{/if}
					</div>
				</main>
			</div><!-- #body -->
			{include file=$template_footer}
		</div><!-- #base -->
		<!-- JavaScript -->
		<script type="text/javascript" src="{$_FRONT.home}/common/js/import.js"></script>
	</body>
</html>