<?php

//抽象クラス 設定するメソッドを強制
abstract class ProductAbstract{
  public function echoProduct() {
    echo '親クラスです';
  }

  //子クラスで必ず使用
  abstract public function getProduct();
}

//子クラス・派生クラス・サブクラス
class Product extends ProductAbstract {

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