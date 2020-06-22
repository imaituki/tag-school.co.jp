			<form class="form-horizontal" action="./{if $mode == 'edit'}update{else}insert{/if}.php" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<div class="form-group required">
						<label class="col-sm-2 control-label">名前</label>
						<div class="col-sm-6">
							{if $message.ng.name|default:'' != NULL}<p class="error">{$message.ng.name}</p>{/if}
							<input type="text" class="form-control" name="name" id="name" value="{$arr_post.name|default:''}" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">ログインID</label>
						<div class="col-sm-6">
							{if $message.ng.account|default:'' != NULL}<p class="error">{$message.ng.account}</p>{/if}
							<input type="text" class="form-control" name="account" id="account" value="{$arr_post.account|default:''}" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">パスワード</label>
						<div class="col-sm-6">
							{if $message.ng.password|default:'' != NULL}<p class="error">{$message.ng.password}</p>{/if}
							<input type="text" class="form-control" name="password" id="password" value="{$arr_post.password|default:''}" maxlength="255" />
						</div>
					</div>
					<div class="hr-line-dashed"></div>
					{if $mode == 'edit'}
					<input type="hidden" name="id_staff" value="{$arr_post.id_staff}" />
					<input type="hidden" name="registed_account" value="{$arr_post.registed_account}" />
					{/if}
					<input type="hidden" name="_contents_dir" id="_contents_dir" value="{$_CONTENTS_DIR}" />
					<input type="hidden" name="_contents_conf_path" id="_contents_conf_path" value="{$_CONTENTS_CONF_PATH}" />
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2 pos_ar">
							<button class="btn btn-primary" type="submit">この内容で登録</button>
						</div>
					</div>
				</div>
			</form>
