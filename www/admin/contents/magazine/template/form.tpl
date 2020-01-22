<form id="inputForm" name="inputForm" class="form-horizontal" action="./preview.php?preview=1" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">タイトル(件名)</label>
			<div class="col-sm-6">
				{if $message.ng.title|default:"" != NULL}<p class="error">{$message.ng.title}</p>{/if}
				<input type="text" class="form-control" name="title" id="title" value="{$arr_post.title|default:""}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ヘッダー </label>
			<div class="col-sm-9">
				{if $message.ng.header|default:"" != NULL}<p class="error">{$message.ng.header}</p>{/if}
				<textarea name="header" id="header" rows="7" class="form-control">{$arr_post.header|default:""}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-9">〇〇〇〇様</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">本文 </label>
			<div class="col-sm-9">
				{if $message.ng.main|default:"" != NULL}<p class="error">{$message.ng.main}</p>{/if}
				<textarea name="main" id="main" rows="20" class="form-control">{$arr_post.main|default:""}</textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">フッター </label>
			<div class="col-sm-9">
				{if $message.ng.footer|default:"" != NULL}<p class="error">{$message.ng.footer}</p>{/if}
				<textarea name="footer" id="footer" rows="7" class="form-control">{$arr_post.footer|default:""}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">送信・保存設定</label>
			<div class="col-sm-6">
				<p>この内容で配信する場合は「次回の送信に設定する」にチェックしてください(チェック後でも送信前なら編集できます)</p>
				{if $message.ng.post_flg|default:"" != NULL}<p class="error">{$message.ng.post_flg}</p>{/if}
				<div class="radio m-r-xs inline">
					{html_radios name="post_flg" values=0 selected=$arr_post.post_flg|default:0 output="下書き保存"}&nbsp;&nbsp;
					{html_radios name="post_flg" values=1 selected=$arr_post.post_flg|default:0 output="次回の送信に設定する"}
				</div>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="button clearfix mb20">
			{if $mode == 'edit'}<input type="hidden" name="{$_CONTENTS_ID}" value="{$arr_post.$_CONTENTS_ID}" />{/if}
			<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
			<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
			<div class="form-group">
				{*<div class="col-sm-offset-1 fl_left">
					<input type="button" id="preview" class="btn btn-info" value="プレビュー" />
				</div>*}
				<div class="fl_right">
					<input type="button" class="btn btn-primary" value="この内容で登録" id="{if $mode == 'edit'}updateBtn{else}insertBtn{/if}" />
				</div>
			</div>
		</div>
	</div>
</form>
{*
{literal}
<script type="text/javascript">
$(function(){
	// プレビューボタンを押すとプレビューが別窓で表示される
	$('input[id="preview"]').on("click", function() {
		window.open("about:blank", "preview");
		document.inputForm.target = "preview";
		document.inputForm.submit();
	});
});
</script>
{/literal}
*}
