<?php
//----------------------------------------
//  テスト用ファイル
//----------------------------------------
require "./config.ini";

// ハッシュ化クラス
$objHash = new FN_hash();

$password = 'abcd1234';
$password2 = 'abcd1234';

$hashed_password = $objHash->encrypt($password);
echo "{$password}=>{$hashed_password}<br>";

$str1 = 'abcd1234';
$hashed_str1 = $objHash->hash_eql($str1, $hashed_password);
echo "{$str1}=>{$hashed_str1}: ";
if ($hashed_str1) {
    echo "password OK<br>";
} else {
    echo "password NG<br>";
}

$str2 = 'wxyz7890';
$hashed_str2 = $objHash->hash_eql($str2, $hashed_password);
echo "{$str2}=>{$hashed_str2}: ";
if ($objHash->hash_eql($str2, $hashed_password)) {
    echo "password OK<br>";
} else {
    echo "password NG<br>";
}
