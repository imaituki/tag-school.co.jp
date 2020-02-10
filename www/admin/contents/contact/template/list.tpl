{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th width="100">お問い合わせ<br />日時</th>
			<th width="100">お問い合わせ<br />項目</th>
			<th width="100">ステータス</th>
			<th>名前</th>
			<th width="150">メールアドレス</th>
			<th width="200">住所</th>
			<th width="150">電話番号</th>
			<th width="80">対応状況</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>お問い合わせ<br />日時</th>
			<th>お問い合わせ<br />項目</th>
			<th>ステータス</th>
			<th>名前</th>
			<th>メールアドレス</th>
			<th>住所</th>
			<th>電話番号</th>
			<th>対応状況</th>
			<th>削除</th>
		</tr>
	</tfoot>
	<tbody>
		{foreach from=$t_contact item=data}
		<tr {if $data.check_flg == 1}style="background-color: #dadada;"{/if}>
			<td>{$data.entry_date|date_format:"%Y/%m/%d %H:%M:%S"}</td>
			<td>{$OptionContent[$data.content]}</td>
			<td>{if $data.status == 0}-{else}{$OptionStatus[$data.status]}{/if}</td>
			<td><a href="./edit.php?id={$data.id_contact}">{$data.name1}<br>({$data.ruby1})</a></td>
			<td>{$data.mail}</td>
			<td>〒{$data.zip}<br>{html_select_ken selected=$data.prefecture|default:"" pre=1}{$data.address}</td>
			<td>{$data.tel}</td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="check{$data.$_CONTENTS_ID}" data-id="{$data.$_CONTENTS_ID}"{if $data.check_flg == 1} checked{/if}>
						<label class="onoffswitch-label" for="check{$data.$_CONTENTS_ID}">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$data.id_contact}">削除</a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="6">{$_CONTENTS_NAME}は見つかりません。</td>
		</tr>
		{/foreach}
	</tbody>
</table>
{include file=$template_pagenavi}
{literal}
<style>
	.onoffswitch-inner:before { content:'完了' !important; }
	.onoffswitch-inner:after  { content:'未完' !important; }
</style>
{/literal}