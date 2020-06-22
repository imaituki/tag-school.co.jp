--------------------------------------------------------
■ LINEオンライン面談ご予約内容
--------------------------------------------------------
[ 面談希望日時 ]
{$arr_post.date|date_format:"%Y/%m/%d"}({$OptionWeek[$arr_post.date|date_format:"w"]}) {if !empty($OptionReserveTime[$arr_post.time])}{$OptionReserveTime[$arr_post.time]}{/if}


[ 保護者氏名 ]
{$arr_post.name2|default:''}{if $arr_post.ruby2|default:'' != NULL}（{$arr_post.ruby2|default:''}）{/if}


[ Eメールアドレス ]
{$arr_post.mail|default:'-'}

[ 電話番号 ]
{$arr_post.tel|default:'-'}

[ 住所 ]
{if empty($arr_post.zip) && empty($arr_post.prefecture) && empty($arr_post.address)}-{/if}
{if $arr_post.zip}〒{$arr_post.zip}{/if}
{if $arr_post.prefecture != 0}{html_select_ken selected=$arr_post.prefecture pre=1}{/if} {$arr_post.address}

[ 児童・生徒氏名 ]
{$arr_post.name1|default:'-'}{if $arr_post.ruby1|default:'' != NULL}（{$arr_post.ruby1|default:''}）{/if}


[ 性別 ]
{$OptionSex[$arr_post.sex]|default:"-"}

[ 学年 ]
{$OptionGrade[$arr_post.grade]|default:"-"}

[ 面談で相談したい内容 ]
{$arr_post.comment|default:'-'}


***********************************************
{$_INFO.company}
〒{$_INFO.zip}
{$_INFO.address}
{if !empty($_INFO.tel)}TEL: {$_INFO.tel}{/if}
{if !empty($_INFO.fax)}FAX: {$_INFO.fax}{/if}
***********************************************
