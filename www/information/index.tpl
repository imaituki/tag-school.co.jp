<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="information">
<div id="base">
{include file=$template_header}
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back"><img src="/common/image/contents/top.jpg" alt="新着情報"></div>
		<div class="page_title_wrap">
			<div class="center mincho">
				<h2><span class="main">新着情報</span><span class="sub">information</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu">
		<div class="center">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i>HOME</a></li>
				<li>新着情報</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper bg_common" >
			<div class="center">
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
				<div class="info_box">
					<a class="ov" href="###">
						<div class="photo img_rect">
							<img src="/common/image/contents/null.jpg" alt="">
						</div>
						<div class="text">
							<div class="disp_td">
								<p class="mb10">
									<span class="tag">ブログ</span>
									<span class="date">2020.01.01</span>
								</p>
								<h3>ホームページをオープンしました。</h3>
							</div>
						</div>
					</a>
				</div>
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
