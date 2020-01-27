<div class="ibox-content form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">お問い合わせ項目</label>
		<div class="col-sm-6">
			{$OptionContent[$arr_post.content]}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">生徒氏名</label>
		<div class="col-sm-6">
			{$arr_post.name1} {if !empty($arr_post.ruby1)}({$arr_post.ruby1}){/if}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">学年</label>
		<div class="col-sm-6">
			{$OptionGrade[$arr_post.grade]}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">希望項目</label>
		<div class="col-sm-6">
			{$OptionRequest[$arr_post.request]}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">お問い合わせ内容</label>
		<div class="col-sm-6">
			{$arr_post.comment|nl2br}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">保護者氏名</label>
		<div class="col-sm-6">
			{if !empty($arr_post.name2)}{$arr_post.name2}{/if} {if !empty($arr_post.ruby2)}({$arr_post.ruby2}){/if}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Eメールアドレス</label>
		<div class="col-sm-6">
			{$arr_post.mail}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">電話番号</label>
		<div class="col-sm-6">
			{$arr_post.tel}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="form-group">
		<label class="col-sm-2 control-label">住所</label>
		<div class="col-sm-6">
			〒{$arr_post.zip}<br>
			{html_select_ken selected=$arr_post.prefecture|default:"" pre=1}{$arr_post.address}
		</div>
	</div>
	<div class="hr-line-dashed"></div>
	<div class="button clearfix mb20">
		<div class="form-group">
			<div class="fl_right">
				<a href="." type="button" class="btn btn-primary">一覧へ戻る</a>
			</div>
		</div>
	</div>
</div>
