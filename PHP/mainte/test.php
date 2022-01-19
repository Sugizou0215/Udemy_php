<?php

  //パスワードを記録したファイルの場所
  echo __FILE__;
  //C:\xampp\htdocs\php_test\mainte\test.php

  //パスワード（暗号化）

  echo '<br>';
  echo(password_hash('password123', PASSWORD_BCRYPT));

  $contactFile= '.contact.dat';

  //ファイル読み込み
  $fileContents = file_get_contents($contactFile);
  echo '<br>';
  echo $fileContents;

  //ファイル書き込み（上書き）
  //file_put_contents($contactFile, 'テスト');

  $addText = 'テスト１' . "\n";

  //ファイル書き込み（追記）
  //file_put_contents($contactFile, $addText, FILE_APPEND);

  //配列　file, 区切る　explode, foreach

  // $allData = file($contactFile);

  // foreach($allData as $lineData) {
  //   $lines = explode(',', $lineData);
  //   echo $lines[0]. '<br>';
  //   echo $lines[1]. '<br>';
  //   echo $lines[2]. '<br>';
  // }

  $contents = fopen($contactFile, 'a+');

  $addText1 = '一行追記' . "\n";
  fwrite($contents, $addText1);

  fclose($contents);
?>