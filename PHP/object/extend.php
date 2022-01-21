<?php

//親クラス・基底クラス・スーパークラス
class BaseProduct{
  public function echoProduct() {
    echo '親クラスです';
  }

  //オーバーライド
  public function getProduct() {
    echo '親の関数です';
  }
}

//子クラス・派生クラス・サブクラス
class Product extends BaseProduct {

  //変数
  private $product = [];

  //関数
  function __construct($product) {

    $this->product = $product;
  }

  // public function getProduct() {
  //   echo $this->product;
  // }

  public function addProduct($item) {
    $this->product .= $item;
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

  $instance->getProduct();

  Product::getStaticProduct('静的');
  echo '<br>';
?>