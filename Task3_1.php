<?php

$str = "dweo9283yrlodfesa983ry3lorndl38rhylrndshao)#8r.23krGk9er7t34r3iu4gfrqa3";

echo $str . "<br>";

//3が1番目に出現する位置
$num3_1 = mb_strpos($str, "3");

//3が2番目に出現する位置
$num3_2 = mb_strpos($str, "3", 8);

//3が3番目に出現する位置
$num3_3 = mb_strpos($str, "3", 20);

// echo "$str";
var_dump($num3_3 + 1);



 ?>
