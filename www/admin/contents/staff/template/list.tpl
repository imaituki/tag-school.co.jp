{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th>スタッフ名</th>
			<th>アカウント</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$mst_staff item="staff" name="loopStaff"}
		<tr id="{$staff.id_staff}">
			<td><a href="./edit.php?id={$staff.id_staff}">{$staff.name}</a></td>
			<td>{$staff.account}</td>
			<td class="pos_al">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$staff.id_staff}">削除</a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="4">{$_CONTENTS_NAME}は見つかりません。</td>
		</tr>
		{/foreach}
	</tbody>
	<tfoot>
		<tr>
			<td colspan="10"><ul class="pagination pull-right">
			</ul></td>
		</tr>
	</tfoot>
</table>
{include file=$template_pagenavi}