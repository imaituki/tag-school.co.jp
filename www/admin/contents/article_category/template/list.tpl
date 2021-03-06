{literal}
<script type="text/javascript">
	sortableInit();
</script>
{/literal}
{include file=$template_pagenavi}
<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15" id="sortable-table">
	<thead>
		<tr>
			<th></th>
			<th>カテゴリ名</th>
			<th class="showhide">表示</th>
			<th class="delete">削除</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$t_article_category item="article_category" name="loopNews"}
		<tr id="{$article_category.id_article_category}">
			<td class="pos_ac pos_vm move_i">{if $arr_post.mode|default:"" == "search"}☓{else}<i class="fa fa-r fa-sort"><span></span></i>{/if}</td>
			<td><a href="./edit.php?id={$article_category.id_article_category}">{$article_category.name}</a></td>
			<td class="pos_ac">
				<div class="switch">
					<div class="onoffswitch">
						<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display{$article_category.id_article_category}" data-id="{$article_category.id_article_category}"{if $article_category.display_flg == 1} checked{/if}>
						<label class="onoffswitch-label" for="display{$article_category.id_article_category}">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
				</div>
			</td>
			<td class="pos_ac">
				<a href="javascript:void(0)" class="btn btn-danger btn_delete" data-id="{$article_category.id_article_category}">削除</a>
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
{include file=$template_pagenavi}