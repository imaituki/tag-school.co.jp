<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
			<li class="nav-header">
				{*
				<div class="dropdown profile-element">
					<span>
						{if !empty($smarty.cookies.ad_image)}
							<img alt="image" class="img-circle" src="/common/photo/staff/image/s_{$smarty.cookies.ad_image}" /></span>
						{else}
						{/if}
					<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
						<span class="clear">
							<span class="block m-t-xs"><strong class="font-bold">{$smarty.cookies.ad_name}</strong></span>
						</span>
					</a>
						<span><a class="text-muted text-xs " href="{$_ADMIN.home}/manual/manual.pdf" target="_blank">管理者マニュアル</a></span>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">

						<li><a href="bottom_template/profile.html">管理者設定</a></li>
						<li class="divider"></li>

						<li><a href="{$_ADMIN.home}/logout.php">ログアウト</a></li>
					</ul>
				</div>
				*}
			</li>
			<li {if $manage == ''} class="active"{/if}>
				<a href="{$_ADMIN.home}/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a>
			</li>
			<li {if $manage == 'information'} class="active"{/if}>
				<a href="{$_ADMIN.home}/contents/information/"><i class="fa fa-info-circle"></i><span class="nav-label">お知らせ管理</span></a>
			</li>
			<li {if $manage == 'contact'} class="active"{/if}>
				<a href="{$_ADMIN.home}/contents/contact/"><i class="fa fa-question-circle" aria-hidden="true"></i><span class="nav-label">お問い合わせ管理</span></a>
			</li>
			<li {if $manage == 'staff'} class="active"{/if}>
				<a href="{$_ADMIN.home}/contents/staff/"><i class="fa fa-user"></i><span class="nav-label">スタッフ管理</span></a>
			</li>
			<li {if $manage == 'siteconf'} class="active"{/if}>
				<a href="{$_ADMIN.home}/contents/siteconf/"><i class="fa fa-gear"></i><span class="nav-label">サイト設定</span></a>
			</li>
			<li {if $action == 'mypage'} class="active"{/if}>
				<a href="#" class="nav-drop">
					<i class="fa fa-r fa-th-large"></i>
					<span class="nav-label">マイページ管理 </span>
					<i class="fa {if $action == 'mypage'}fa-angle-down{else}fa-angle-left{/if} fl_arrow_r"></i>
				</a>
				<ul class="nav nav-second-level">
					<li {if $manage == 'member'}class="active"{/if}><a href="{$_ADMIN.home}/contents/member/"><i class="fa fa-group"></i>会員管理</a></li>
					<li {if $manage == 'article'}class="active"{/if}><a href="{$_ADMIN.home}/contents/article/"><i class="fa fa-folder-open"></i>28記事管理</a></li>
					<li {if $manage == 'article_category'}class="active"{/if}><a href="{$_ADMIN.home}/contents/article_category/"><i class="fa fa-folder-open"></i>28カテゴリー管理</a></li>
					<li {if $manage == 'magazine'}class="active"{/if}><a href="{$_ADMIN.home}/contents/magazine/"><i class="fa fa-newspaper-o"></i>メールマガジン配信</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
