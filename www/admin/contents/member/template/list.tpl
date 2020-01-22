{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
	<thead>
		<tr>
			<th>登録状況</th>
			<th>登録日</th>
			<th>お名前</th>
			<th>Eメールアドレス</th>
			<th>メルマガ希望</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$t_member item="member" name="loopNews"}
		<tr {if $member.delete_flg == 1}style="background:#BBBBBB;"{/if}>
			<td>
				{if empty($member.password)}
					<span style="color:#0393B5;">仮登録</span>
				{else}
					本登録
				{/if}
			</td>
			<td>{$member.entry_date|date_format:'%Y/%m/%d %H:%M:%S'}</td>
			<td>
				<a href="./edit.php?id={$member.id_member}">
					{if $member.delete_flg == 1}【退会】{/if}
					{if !empty($member.name1) || !empty($member.name2)}
						{$member.name1}&nbsp;{$member.name2}&nbsp;
					{else}
						氏名未登録
					{/if}
					{if !empty($member.ruby1) || !empty($member.ruby2)}
						({$member.ruby1}&nbsp;{$member.ruby2})
					{/if}
				</a>
			</td>
			<td>{$member.mail}</td>
			<td>{if $member.mail_magazine_flg == 1}希望{else}-{/if}</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$member.id_member}">削除</a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="6">{$_CONTENTS_NAME}は見つかりません。</td>
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
<div id="blueimp-gallery" class="blueimp-gallery">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>
{include file=$template_pagenavi}