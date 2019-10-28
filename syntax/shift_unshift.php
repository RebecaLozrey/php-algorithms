<?php

//SHIFT

$array1 = array(1,4,6,7);

echo "original array: <br>";

print_r($array1);

echo "<br>";

//remove first element and keep it


$first_element = array_shift($array1);

echo "first element : $first_element <br>";

echo "smaller array: <br>";

print_r($array1);


//UNSHIFT

array_unshift($array1, 2);

echo "<br>";

echo "first element bigger array: ";

echo "<br>";

print_r($array1);