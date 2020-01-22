--------------------------------------------------------
■ お問い合わせ内容
--------------------------------------------------------
[ 生徒氏名 ]
{$arr_post.name1|default:'-'} {if !empty($arr_post.ruby1)}({$arr_post.ruby1|default:''}){/if} 

[ 学年 ]
{$OptionGrade[$arr_post.grade]}

[ 保護者氏名 ]
{$arr_post.name2|default:'-'} {if !empty($arr_post.ruby2)}({$arr_post.ruby2|default:''}){/if} 

[ 入塾希望理由 ]
{$arr_post.reason|default:'-'}

[ Eメールアドレス ]
{$arr_post.mail|default:'-'}

[ 電話番号 ]
{$arr_post.tel|default:'-'}

[ 住所 ]
{$arr_post.address|default:'-'}

[ 備考 ]
{$arr_post.comment|default:''}

