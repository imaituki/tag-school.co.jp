<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css" />
{include file=$template_javascript}
<script type="text/javascript" src="/common/js/lightbox/import.js"></script>
</head>
<body id="information_detail">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/">28 マイページ</a></li>
				<li><a href="{$_FRONT.home}/{$_DIR_NAME}/article/">28</a></li>
				<li>{$_HTML_HEADER.title}</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" id="article">
			<div class="center">
				<h2 class="hl_3 mincho">{$_HTML_HEADER.title}</h2>
				<div class="box bg0 info_box">
					<div class="box_in">
						<div class="mb20">
							<span class="tag">{$OptionArticleCategory[$data.id_article_category]}</span>
							<span class="date">{$data.date|date_format:'%Y.%m.%d'}</span>
						</div>
						{if !empty($data.image1)}
						<div class="pos_ac mb50">
							<img src="{$_IMAGEFULLPATH}/article/image1/l_{$data.image1}" alt="{$data.title}" />
						</div>
						{/if}
						<div class="entry mb50 comment">
							{$data.comment}
						</div>
						{if !empty($data.image2) || !empty($data.image3) || !empty($data.image4) || !empty($data.image5)}
						<div class="row">
							{if !empty($data.image2)}
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="{$_IMAGEFULLPATH}/article/image2/l_{$data.image2}" rel="lightbox">
									<div class="img_rect"><img src="{$_IMAGEFULLPATH}/article/image2/m_{$data.image2}" alt="{$data.title}" /></div>
								</a>
							</div>
							{/if}
							{if !empty($data.image3)}
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="{$_IMAGEFULLPATH}/article/image3/l_{$data.image3}" rel="lightbox">
									<div class="img_rect"><img src="{$_IMAGEFULLPATH}/article/image3/m_{$data.image3}" alt="{$data.title}" /></div>
								</a>
							</div>
							{/if}
							{if !empty($data.image4)}
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="{$_IMAGEFULLPATH}/article/image4/l_{$data.image4}" rel="lightbox">
									<div class="img_rect"><img src="{$_IMAGEFULLPATH}/article/image4/m_{$data.image4}" alt="{$data.title}" /></div>
								</a>
							</div>
							{/if}
							{if !empty($data.image5)}
							<div class="col-xs-3 col-6 height-1 mb20">
								<a class="ov" href="{$_IMAGEFULLPATH}/article/image5/l_{$data.image5}" rel="lightbox">
									<div class="img_rect"><img src="{$_IMAGEFULLPATH}/article/image5/m_{$data.image5}" alt="{$data.title}" /></div>
								</a>
							</div>
							{/if}
						</div>
						{/if}
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div class="pos_ac">
					<a href="./{if is_numeric($arr_get.page)}?page={$arr_get.page}{/if}" class="button _type1 ov"><i class="fa fa-chevron-left"></i>一覧へ戻る</a>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
{include file=$template_footer mode=mypage}
</div>
</body>
</html>
