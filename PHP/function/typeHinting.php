<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

echo 'タイプヒンティングテスト' . '<br>';

function noTypeHint($string){
  var_dump($string);
}

function typeTest(string $string) {
  var_dump($string);
}

typeTest('テスト');
// typeTest(['配列文字']); //エラー
?>