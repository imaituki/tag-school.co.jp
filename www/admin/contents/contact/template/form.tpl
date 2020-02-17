<form id="inputForm" name="inputForm" class="form-horizontal" action="./preview.php?preview=1" method="post" enctype="multipart/form-data">
	<div class="ibox-content form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">お問い合わせ項目</label>
			<div class="col-sm-6">
				{html_radios name="content" options=$OptionContent selected=$arr_post.content separator='&nbsp;'}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">生徒氏名</label>
			<div class="col-sm-6">
				<input type="text" name="name1" class="form-control" value="{$arr_post.name1}" placeholder="漢字" /><br />
				<input type="text" name="ruby1" class="form-control" value="{$arr_post.ruby1}" placeholder="フリガナ" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">学年</label>
			<div class="col-sm-6">
				<select name="grade">
					<option value="">選択してください。</option>
					{html_options options=$OptionGrade selected=$arr_post.grade}
				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">希望項目</label>
			<div class="col-sm-6">
				{html_radios name="request" options=$OptionRequest selected=$arr_post.request separator='&nbsp;'}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">入塾希望理由</label>
			<div class="col-sm-6">
				<textarea name="reason" class="form-control" style="min-height:100px;">{$arr_post.reason}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">保護者氏名</label>
			<div class="col-sm-6">
				<input type="text" name="name2" class="form-control" value="{$arr_post.name2}" /><br />
				<input type="text" name="ruby2" class="form-control" value="{$arr_post.ruby2}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Eメールアドレス</label>
			<div class="col-sm-6">
				<input type="email" name="mail" class="form-control" value="{$arr_post.mail}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-6">
				<input type="tel" name="tel" class="form-control" value="{$arr_post.tel}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">住所</label>
			<div class="col-sm-6">
				〒<input type="text" name="zip" class="form-control" value="{$arr_post.zip}" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');">郵便番号から住所を表示する</a><br />
				<select name="prefecture" id="prefecture" class="form-control">
					{html_select_ken str_default="選択してください" selected=$arr_post.prefecture}
				</select><br />
				<input type="text" name="address" class="form-control" value="{$arr_post.address}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">お問い合わせ内容</label>
			<div class="col-sm-6">
				<textarea name="comment" class="form-control">{$arr_post.comment}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">どこからのお問い合わせか</label>
			<div class="col-sm-6">
				{html_radios name="referer" options=$OptionContactReferer selected=$arr_post.referer separator='&nbsp;'}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">ステータス</label>
			<div class="col-sm-6">
				<select name="status">
					<option value="0">選択してください。</option>
					{html_options options=$OptionStatus selected=$arr_post.status}
				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">備考</label>
			<div class="col-sm-6">
				<textarea name="memo" class="form-control" style="min-height:100px;">{$arr_post.memo}</textarea>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">対応状況</label>
			<div class="col-sm-6">
				{if $message.ng.check_flg|default:'' != NULL}<p class="error">{$message.ng.check_flg}</p>{/if}
				<div class="radio m-r-xs inline">
					{html_radios name="check_flg" values=1 selected=$arr_post.check_flg|default:"0" output="完了"}&nbsp;&nbsp;
					{html_radios name="check_flg" values=0 selected=$arr_post.check_flg|default:"0" output="未完"}
				</div>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="button clearfix mb20">
			{if $mode == 'edit'}<input type="hidden" name="{$_CONTENTS_ID}" value="{$arr_post.$_CONTENTS_ID}" />{/if}
			<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
			<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
			<div class="form-group">
				<div class="fl_right">
					<input type="button" class="btn btn-primary" value="この内容で登録" id="{if $mode == 'edit'}updateBtn{else}insertBtn{/if}" />
				</div>
			</div>
		</div>
	</div>
</form>