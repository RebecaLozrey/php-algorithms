<?php

$var1 = "2";
$var2 = "3";
echo "$var1 <br>";
echo gettype($var1)."<br>";
$converted = (int)$var1;
echo "$converted<br>";
echo gettype($converted)."<br>";;
$boolean = (boolean)$var2;
echo "num to boolean $boolean";

