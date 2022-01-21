<?php

//インターフェイス
interface ProductInterface{
  // public function echoProduct() {
  //   echo '親クラスです';
  // }

  //子クラスで必ず使用
  public function getProduct();
}

//インターフェイス
interface NewInterface{
  // public function echoProduct() {
  //   echo '親クラスです';
  // }

  //子クラスで必ず使用
  public function getProduct();
}


//子クラス・派生クラス・サブクラス
class Product implements ProductInterface, NewInterface {

  //変数
  private $product = [];

  //関数
  function __construct($product) {

    $this->product = $product;
  }

  public function getProduct() {
    echo $this->product;
  }

  public function addProduct($item) {
    $this->product .= $item;
  }

  public function getNews() {
    echo 'ニュースです';
  }

  public static function getStaticProduct($str) {
    echo $str;
  }
}
  $instance = new Product('テスト');

  $instance->getProduct();
  echo '<br>';

  $instance->echoProduct();

  $instance->addProduct('追加分');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  Product::getStaticProduct('静的');
  echo '<br>';

  $instance->getNews();
?>