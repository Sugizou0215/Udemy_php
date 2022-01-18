<?php

function test() {
  echo 'test';
}

test();

function getComment($string) {
  echo $string;
}

$comment = 'テスト';
getComment($comment);

function getNumberComment() {
  return 5;
}

echo getNumberComment();

function sumPrice($int1, $int2) {
  $int3 = $int1 + $int2;
  return $int3;
}

echo sumPrice(1,2);

//文字数取得
$text = 'あいうえお';
echo strlen($text); //マルチバイトのため15に
echo mb_strlen($text);

//文字列置換
$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

//文字列分割
$str2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str2));
echo '</pre>';

//正規表現
$str3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/', $str3);

//指定文字列から文字列を取得
echo substr('あいう', 2); //マルチバイトのため文字化け

echo mb_substr('かきくけこ', 2);

$array = ['apple', 'orange'];
array_push($array, 'grape', 'cherry');

echo '<pre>';
var_dump($array);
echo '</pre>';

$postalCode = '123-4567';

function checkPostalCode($str) {
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);

  if ($length === 7) {
    return $replaced;
  } else {
    return false;
  }
}

echo checkPostalCode($postalCode);

?>