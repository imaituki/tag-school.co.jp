<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" name="formField" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		{if $message.ok|default:"" != NULL}<div id="msg" class="ok mb20">{$message.ok}</div>{/if}
		{if $message.ng.limit|default:"" != NULL}<p class="error">{$message.ng.limit}</p>{/if}
		<div class="hr-line-dashed"></div>
		<ul class="row">
			<li class="col-sm-12">
				{if $message.ng.max_number|default:"" != NULL}<p class="error">{$message.ng.max_number}</p>{/if}
				<span class="first">同時刻の予約数上限</span>
				<span class="second"><input class="form-control w70" type="number" name="max_number" id="max_number" value="{$arr_post.max_number}" min="1" step="1" style="display:inline-block"> 人まで</span>
				<div class="hr-line-dashed"></div>
			</li>
			<li class="col-sm-12">
				{if $message.ng.mid_number|default:"" != NULL}<p class="error">{$message.ng.mid_number}</p>{/if}
				<span class="first">△を表示する予約数</span>
				<span class="second"><input class="form-control w70" type="number" name="mid_number" id="mid_number" value="{$arr_post.mid_number}" min="0" step="1" style="display:inline-block"> 人の時に表示<br>
				<p>（※「△」マークを利用しない場合は0人にして下さい）</p></span>
				<div class="hr-line-dashed"></div>
			</li>
	{*		<li style="display:none" class="col-sm-12">
				<span class="first">予約時間の区切り</span>
				<span class="second"><input class="form-control w70" type="number" name="separate_minite" id="separate_minite" value="{$arr_post.separate_minite}" max="60" min="10" step="10" style="display:inline-block"> 分区切り</span>
			</li>
			<li style="display:none" class="col-sm-12">
				<span class="first">予約締切</span>
				<span class="second">予約日の
					<input class="form-control w70" type="number" name="limit_day" id="limit_day" value="{$arr_post.limit_day}" max="30" min="0" step="1" style="display:inline-block"> 日前
					<input class="form-control w70" type="number" name="limit_time" id="limit_time" value="{$arr_post.limit_time}" max="23" min="0" step="1" style="display:inline-block"> 時まで<br>
					（※当日まで受付可にする場合は、0日にしてください）</span>
			</li>*}
		</ul>
		{if $mode == 'edit'}
		<input type="hidden" name="id_online_consultation_setting" value="{$arr_post.id_online_consultation_setting}" />
		{/if}
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				<div class="save-btn inline">
					<a class="btn btn-primary" href="javascript:void(0);" onclick="document.formField.submit();">
						この内容で登録
					</a>
				</div>

			</div>
		</div>
	</div>
</form>
{literal}
<script>
</script>
<style>
.wrapper-content-main-form > ul > li { margin-bottom:0; }
</style>
{/literal}
