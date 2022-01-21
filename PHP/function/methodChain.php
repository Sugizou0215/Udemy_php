<?php

class Product {
  private $price = 1000;

  public function getPrice() {
    return $this->price;
  }
}

class Cart {
  private $products = [];

  public function addItem($product) {
    $this->products[] = $product;
  }

  public function getItem($index) {
    return $this->products[$index];
  }
  
 }

 $cart = new Cart();

  //引数にインスタンス
  $cart->addItem(new Product());

  //通常（それぞれメソッド実行）
  $gotItem = $cart->getItem(0);
  $price = $gotItem->getPrice();

  echo '<br>';
  echo '通常メソッド' . '<br>';
  echo $price;
  echo '<br>';

  //メソッドチェーン
  $price = $cart->getItem(0)->getPrice();

  echo 'メソッドチェーン' . '<br>';
  echo $price;
  echo '<br>';

?>