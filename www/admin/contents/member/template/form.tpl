<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
	<div class="ibox-content">
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">お名前</label>
			<div class="col-sm-3">
				{if $message.ng.name1|default:'' != NULL}<p class="error">{$message.ng.name1}</p>{/if}
				<input type="text" class="form-control" name="name1" id="name1" value="{$arr_post.name1|default:''}" />
				<input type="text" class="form-control" name="name2" id="name2" value="{$arr_post.name2|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">フリガナ</label>
			<div class="col-sm-3">
				{if $message.ng.ruby1|default:'' != NULL}<p class="error">{$message.ng.ruby1}</p>{/if}
				<input type="text" class="form-control" name="ruby1" id="ruby1" value="{$arr_post.ruby1|default:''}" />
				<input type="text" class="form-control" name="ruby2" id="ruby2" value="{$arr_post.ruby2|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">郵便番号</label>
			<div class="col-sm-6">
				{if $message.ng.zip|default:'' != NULL}<p class="error">{$message.ng.zip}</p>{/if}
				<input type="text" style="width:200px;" class="form-control input-s" name="zip" id="zip" size="8" maxlength="8" value="{$arr_post.zip|default:''}" />
				<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address1');">郵便番号から住所を表示する</a>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">都道府県</label>
			<div class="col-sm-6">
				{if $message.ng.prefecture|default:'' != NULL}<p class="error">{$message.ng.prefecture}</p>{/if}
				{literal}<style>.w200{width:200px;}</style>{/literal}
				{html_select_ken name="prefecture" class="form-control inline input-s w200" selected=$arr_post.prefecture|default:"0"}
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">市区町村</label>
			<div class="col-sm-6">
				{if $message.ng.address1|default:'' != NULL}<p class="error">{$message.ng.address1}</p>{/if}
				<input type="text" class="form-control" name="address1" id="address1"  size="60" value="{$arr_post.address1|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">番地 / 建物・マンション名</label>
			<div class="col-sm-6">
				{if $message.ng.address2|default:'' != NULL}<p class="error">{$message.ng.address2}</p>{/if}
				<input type="text" class="form-control" name="address2" id="address2"  size="60" value="{$arr_post.address2|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">電話番号</label>
			<div class="col-sm-3">
				{if $message.ng.tel|default:'' != NULL}<p class="error">{$message.ng.tel}</p>{/if}
				<input type="tel" class="form-control" name="tel" id="tel" value="{$arr_post.tel|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">メールアドレス</label>
			<div class="col-sm-6">
				{if $message.ng.mail|default:'' != NULL}<p class="error">{$message.ng.mail}</p>{/if}
				<input type="mail" class="form-control" name="mail" id="mail" value="{$arr_post.mail|default:''}" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group">
			<label class="col-sm-2 control-label">パスワード ※変更する場合に入力</label>
			<div class="col-sm-6">
				{if $message.ng.password|default:'' != NULL}<p class="error">{$message.ng.password}</p>{/if}
				<span class="c_red">
					※パスワード{if !empty($arr_post.password)}設定済みです{else}未設定です{/if}
				</span>
				<input type="password" class="form-control" name="password" id="password" value="" />
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">メールマガジン希望</label>
			<div class="col-sm-6">
				{if $message.ng.mail_magazine_flg|default:'' != NULL}<p class="error">{$message.ng.mail_magazine_flg}</p>{/if}
				{html_radios name="mail_magazine_flg" options=$OptionYesNo selected=$arr_post.mail_magazine_flg|default:0 separator='&nbsp;'}
			</div>
		</div>
		{if $arr_post.delete_flg == 1}
		<div class="hr-line-dashed"></div>
		<div class="form-group required">
			<label class="col-sm-2 control-label">退会希望</label>
			<div class="col-sm-6">
				{if $message.ng.delete_flg|default:'' != NULL}<p class="error">{$message.ng.delete_flg}</p>{/if}
				{html_radios name="delete_flg" options=$OptionYesNo selected=$arr_post.delete_flg|default:0 separator='&nbsp;'}
			</div>
		</div>
		{/if}
		<div class="hr-line-dashed"></div>
		{if $mode == 'edit'}<input type="hidden" name="{$_CONTENTS_ID}" value="{$arr_post.$_CONTENTS_ID}" />{/if}
		<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
		<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 pos_ar">
				<button class="btn btn-primary"  type="submit">この内容で登録</button>
			</div>
		</div>
	</div>
</form>