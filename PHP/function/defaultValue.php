<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

function defaultValue($string = null) {
  echo $string . 'です';
}

defaultValue();
echo '<br>';

defaultValue('テスト');

?>