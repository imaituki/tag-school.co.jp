--------------------------------------------------------
■ お問い合わせ内容
--------------------------------------------------------
[ お問い合わせ項目 ]
{$OptionContent[$arr_post.content]}

[ 生徒氏名 ]
{$arr_post.name1|default:'-'} {if !empty($arr_post.ruby1)}({$arr_post.ruby1|default:''}){/if}

[ 学年 ]
{$OptionGrade[$arr_post.grade]}

[ 希望項目 ]
{$OptionRequest[$arr_post.request]}

[ 入塾希望理由 ]
{$arr_post.reason|default:'-'}

[ 保護者氏名 ]
{$arr_post.name2|default:'-'} {if !empty($arr_post.ruby2)}({$arr_post.ruby2|default:''}){/if}

[ Eメールアドレス ]
{$arr_post.mail|default:'-'}

[ 電話番号 ]
{$arr_post.tel|default:'-'}

{if $arr_post.zip != NULL ||  $arr_post.prefecture != 0 || $arr_post.address != NULL}
[ 住所 ]
{if $arr_post.zip}〒{$arr_post.zip}{/if} 
{if $arr_post.prefecture != 0}{html_select_ken selected=$arr_post.prefecture pre=1}{/if} {$arr_post.address}
{/if}

[ 備考 ]
{$arr_post.comment|default:'-'}


***********************************************
{$_INFO.company}
〒{$_INFO.zip}
{$_INFO.address}
{if !empty($_INFO.tel)}TEL: {$_INFO.tel}{/if} 
{if !empty($_INFO.fax)}FAX: {$_INFO.fax}{/if} 
***********************************************