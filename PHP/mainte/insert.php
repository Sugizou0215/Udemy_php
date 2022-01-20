<?php

//DB接続
function insertContact($request){
require 'db_connection.php';

//保存 prepare, bind, execute
$params = [
  'id' => null,
  'your_name' => $request['your_name'],
  'email' => $request['email'],
  'url' => $request['url'],
  'gender' => $request['gender'],
  'age' => $request['age'],
  'contact' => $request['contact'],
  'created_at' => 'NOW()'
];


// $params = [
//   'id' => null,
//   'your_name' => '名前',
//   'email' => 'test@test.com',
//   'url' => 'http://test.co.jp',
//   'gender' => '1',
//   'age' => '2',
//   'contact' => 'テストです',
//   'created_at' => 'NOW()'
// ];
$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key) {
  if($count++>0){
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':'.$key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values . ')'; //プレースホルダー

$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->execute($params); //実行

}
?>