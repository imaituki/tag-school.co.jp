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
					<h2 class="hl"><img src="{$_FRONT.home}/common/image/content/{$_DIR_NAME}/title.png" alt="記事" /></h2>
				</div>
			</div>
			</section>
			<div id="body">
				<main class="layout--body">
					<div class="container">
						<div class="layout--body_box">
							<section class="style-mypage-list">
								<div>
									<div>{$data.date|date_format:'%Y/%m/%d'}</div>
									<div>{$OptionArticleCategory[$data.id_article_category]}</div>
									<div>
										<a href="{$link}?id={$data.id_article}">{$data.title}</a>
									</div>
									<div>{$data.comment}</div>
									{if !empty($data.image1) || !empty($data.image2) || !empty($data.image3) || !empty($data.image4) || !empty($data.image5)}
										<div class="row">
											{if !empty($data.image1)}
											<div class="col-md-4">
												<a href="">
													<img src="{$_IMAGEFULLPATH}/article/image1/s_{$data.image1}" alt="{$data.caption1|default:''}" />
												</a>
												{if !empty($data.caption1)}<div>{$data.caption1}</div>{/if}
											</div>
											{/if}
											{if !empty($data.image2)}
											<div class="col-md-4">
												<a href="">
													<img src="{$_IMAGEFULLPATH}/article/image2/s_{$data.image2}" alt="{$data.caption2|default:''}" />
												</a>
												{if !empty($data.caption2)}<div>{$data.caption2}</div>{/if}
											</div>
											{/if}
											{if !empty($data.image3)}
											<div class="col-md-4">
												<a href="">
													<img src="{$_IMAGEFULLPATH}/article/image3/s_{$data.image3}" alt="{$data.caption3|default:''}" />
												</a>
												{if !empty($data.caption3)}<div>{$data.caption3}</div>{/if}
											</div>
											{/if}
											{if !empty($data.image4)}
											<div class="col-md-4">
												<a href="">
													<img src="{$_IMAGEFULLPATH}/article/image4/s_{$data.image4}" alt="{$data.caption4|default:''}" />
												</a>
												{if !empty($data.caption4)}<div>{$data.caption4}</div>{/if}
											</div>
											{/if}
											{if !empty($data.image5)}
											<div class="col-md-4">
												<a href="">
													<img src="{$_IMAGEFULLPATH}/article/image5/s_{$data.image5}" alt="{$data.caption5|default:''}" />
												</a>
												{if !empty($data.caption5)}<div>{$data.caption5}</div>{/if}
											</div>
											{/if}
										</div>
									{/if}
								</div>
							</section>
						</div>
						<div class="pagenation yu-mincho mb100">
							<a href="./{if is_numeric($arr_get.page)}?page={$arr_get.page}{/if}">一覧に戻る</a>
						</div><!--//.pagenation-->
					</div>
				</main>
			</div><!-- #body -->
			{include file=$template_footer}
		</div><!-- #base -->
		<!-- JavaScript -->
		<script type="text/javascript" src="{$_FRONT.home}/common/js/import.js"></script>
	</body>
</html>