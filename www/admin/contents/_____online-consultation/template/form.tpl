<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" name="formField" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		{if $message.ok|default:"" != NULL}<div class="ok mb20">{$message.ok}</div>{/if}
		{if $message.ng.limit|default:"" != NULL}<p class="error">{$message.ng.limit}</p>{/if}
		<div class="form-group required">
			<label class="col-sm-2 control-label">予約日</label>
			<div class="col-sm-6">
				{if $message.ng.date|default:"" != NULL}<p class="error">{$message.ng.date}</p>{/if}
				<div class="input-daterange input-group dis_it pos_vm" id="datepicker">
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					<input type="text" class="input-sm datepicker form-control mt0" name="date" id="date" value="{$arr_post.date|default:""}" readonly>
					<select name="time" class="selectpicker form-control">
						{html_options options=$OptionReserveTime selected=$arr_post.time}
					</select>
				</div>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">申込日時</label>
			<div class="col-sm-6">
				{if $mode == 'edit'}
					{$arr_post.entry_date|date_format:"%Y&#24180;%m&#26376;%d&#26085; %H:%M:%S"}
					<input type="hidden" name="entry_date" value="{$arr_post.entry_date|default:""}">
				{else}
					自動保存
				{/if}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">保護者氏名</label>
			<div class="col-sm-6">
				{if $message.ng.name2|default:"" != NULL}<p class="error">{$message.ng.name2}</p>{/if}
				<input type="text" class="form-control" name="name2" id="name2" value="{$arr_post.name2|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">保護者氏名(フリガナ)</label>
			<div class="col-sm-6">
				{if $message.ng.ruby2|default:"" != NULL}<p class="error">{$message.ng.ruby2}</p>{/if}
				<input type="text" class="form-control" name="ruby2" id="ruby2" value="{$arr_post.ruby2|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">Eメールアドレス</label>
			<div class="col-sm-6">
				{if $message.ng.mail|default:"" != NULL}<p class="error">{$message.ng.mail}</p>{/if}
				<input type="text" class="form-control" name="mail" id="mail" value="{$arr_post.mail|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-6">
				{if $message.ng.tel|default:"" != NULL}<p class="error">{$message.ng.tel}</p>{/if}
				<input type="text" class="form-control" name="tel" id="tel" value="{$arr_post.tel|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">住所</label>
			<div class="col-sm-6">
				〒<input type="text" name="zip" class="form-control" value="{$arr_post.zip|default:""}" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');">郵便番号から住所を表示する</a><br />
				<select name="prefecture" id="prefecture" class="form-control">
					{html_select_ken str_default="選択してください" selected=$arr_post.prefecture}
				</select><br />
				<input type="text" name="address" class="form-control" value="{$arr_post.address|default:""}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">児童・生徒氏名</label>
			<div class="col-sm-6">
				{if $message.ng.name1|default:"" != NULL}<p class="error">{$message.ng.name1}</p>{/if}
				<input type="text" class="form-control" name="name1" id="name1" value="{$arr_post.name1|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">児童・生徒氏名(フリガナ)</label>
			<div class="col-sm-6">
				{if $message.ng.ruby1|default:"" != NULL}<p class="error">{$message.ng.ruby1}</p>{/if}
				<input type="text" class="form-control" name="ruby1" id="ruby1" value="{$arr_post.ruby1|default:""}" maxlength="255" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">性別</label>
			<div class="col-sm-6">
				{if $message.ng.sex|default:"" != NULL}<p class="error">{$message.ng.sex}</p>{/if}
				<select name="sex" class="form-control">
					<option value="">選択してください。</option>
					{html_options options=$OptionSex selected=$arr_post.sex}
				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">学年</label>
			<div class="col-sm-6">
				{if $message.ng.grade|default:"" != NULL}<p class="error">{$message.ng.grade}</p>{/if}
				<select name="grade" class="form-control">
					<option value="">選択してください。</option>
					{html_options options=$OptionGrade selected=$arr_post.grade}
				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">面談で相談したい内容</label>
			<div class="col-sm-9">
				{if $message.ng.comment|default:"" != NULL}<p class="error">{$message.ng.comment}</p>{/if}
				<textarea type="text" class="form-control" name="comment" id="comment" rows="7"/>{$arr_post.comment|default:""}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		{if $mode == 'edit'}
		<div class="form-group">
			<label class="col-sm-2 control-label">キャンセルする</label>
			<div class="col-sm-6">
				{if $message.ng.cancel_flg|default:"" != NULL}<p class="error">{$message.ng.cancel_flg}</p>{/if}
				{html_checkboxes name="cancel_flg" values="1" output="キャンセル" selected=$arr_post.cancel_flg|default:"0"}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		{/if}
		{if $mode == 'edit'}
		<input type="hidden" name="id_online_consultation" value="{$arr_post.id_online_consultation}" />
		{/if}
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				{if $mode == 'edit'}
				<div class="delete-link inline">
					<a class="btn btn-danger" href="./delete.php?id={$arr_post.id_online_consultation}&date={$arr_post.date}" id="delete_online_consultation" data-id="{$arr_post.id_online_consultation}">
						この予約を削除
					</a>
				</div>
				{/if}
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
	$("#delete_online_consultation").click(function(){
		var id_online_consultation = $(this).attr("data-id");
		if( !confirm("この予約を削除します。元に戻せません。本当に削除しますか。") ){
			return false;
		}else{
			$.ajax({
				url: "delete.php",
				type: "GET",
				date: { id: id_online_consultation }
			});
		}
	});
</script>
<style>
.wrapper-content-main-form > ul > li { margin-bottom:0; }
</style>
{/literal}
