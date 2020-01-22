{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th></th>
			<th>No.</th>
			<th>タイトル</th>
			<th>送信日</th>
			<th>送信数</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="100"></th>
			<th width="100">No.</th>
			<th>タイトル</th>
			<th width="100">送信日</th>
			<th width="100">送信数</th>
			<th class="delete" width="60">削除</th>
		</tr>
	</tfoot>
	<tbody>
		{foreach from=$arr_data item=data}
		<tr>
			<td class="pos_ac"><a href="./preview.php?id={$data.$_CONTENTS_ID}" target="_blank">プレビュー</a></td>
			<td>{$data.number|number_format}</td>
			<td>
				<a href="./edit.php?id={$data.$_CONTENTS_ID}">{$data.title}</a>&nbsp;
				{if $data.post_flg == 1}<b>(次回送信予定)</b>{/if}
			</td>
			<td>{$data.date|date_format:"%Y/%m/%d"}</td>
			<td>{$data.post_num|number_format}</td>
			<td>
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$data.$_CONTENTS_ID}">削除</a>
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