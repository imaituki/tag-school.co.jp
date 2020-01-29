{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th width="100">お問い合わせ日時</th>
			<th width="100">お問い合わせ項目</th>
			<th width="300">名前</th>
			<th width="200">メールアドレス</th>
			<th width="200">住所</th>
			<th width="150">電話番号</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th width="100">お問い合わせ日時</th>
			<th width="100">お問い合わせ項目</th>
			<th>名前</th>
			<th width="150">メールアドレス</th>
			<th width="200">住所</th>
			<th width="150">電話番号</th>
			<th class="delete">削除</th>
		</tr>
	</tfoot>
	<tbody>
		{foreach from=$t_contact item=contact}
		<tr {if $contact.check_flg == 1}style="background-color: #dadada;"{/if}>
			<td>{$contact.entry_date|date_format:"%Y/%m/%d %H:%M:%S"}</td>
			<td>{$OptionContent[$contact.content]}</td>
			<td><a href="./edit.php?id={$contact.id_contact}">{$contact.name1}<br>({$contact.ruby1})</a></td>
			<td>{$contact.mail}</td>
			<td>〒{$contact.zip}<br>{html_select_ken selected=$contact.prefecture|default:"" pre=1}{$contact.address}</td>
			<td>{$contact.tel}</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$contact.id_contact}">削除</a>
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
