<?php

require 'db_connection.php';

//ユーザー入力なし query
// $sql = 'select * from contacts where id =1';
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり prepare bind execute
$sql = 'select * from contacts where id =:id'; //プレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT); //紐づけ
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション beginTransaction, commit, rollback

$pdo->beginTransaction();

try{
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindValue('id', 2, PDO::PARAM_INT); //紐づけ
  $stmt->execute(); //実行
  
  $pdo->commit();
}catch(PDOException $e) {

  $pdo->rollback();
}

?>