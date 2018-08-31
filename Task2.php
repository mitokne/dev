<?php

$str = "1,2,3,4,5";

//文字列の文字を分割
$str2 = explode(",",$str);

foreach ($str2 as $key => $value) {
  // code...
  // echo $key . "の配列に" . $value . "<br>";

}

var_dump($str);

var_dump($str2);


 ?>
