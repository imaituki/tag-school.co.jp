{if !empty($arr_post.temp_var)}{* 新規登録のとき *}

--------------------------------------------------------
■ 仮登録内容
--------------------------------------------------------

[ メールアドレス ]
{$arr_post.mail|default:''}


こちらのURLから本登録に進んでください。
{if empty($smarty.server.HTTPS)}http://{else}https://{/if}{$smarty.server.HTTP_HOST}/{$_DIR_NAME}/regist/?id={$arr_post.id}&user={$arr_post.temp_var}

{else}{* 本登録のとき *}
--------------------------------------------------------
■ 本登録内容
--------------------------------------------------------
[ メールアドレス ]
{$arr_post.mail|default:''}

[ パスワード ]
※ご入力いただいたパスワード

こちらから、メールアドレスとパスワードを入力して、マイページにログインしてください。
{if empty($smarty.server.HTTPS)}http://{else}https://{/if}{$smarty.server.HTTP_HOST}/{$_DIR_NAME}/login.php

{/if}
