<?php
// NUMERO
$numero = 5;
echo "esto es un numero $numero <br>";
var_dump($numero);
echo "<br><br><br>";

//STRING 
$string = "Rebeca";
echo "Esto es una string $string <br>";
var_dump($string);
echo "<br><br><br>";
        
//BOOLEAN
$boolean = true;
echo "esto es un boolean $boolean <br>";
var_dump($boolean);
echo "<br><br>";

//ARRAYS
$colores = array("rojo","verde");
echo "esto es un arreglo $colores[1] <br>";
var_dump($colores);
echo "<br><br>";

//ARRAYS WITH ID
$frutas = array("fr1"=>"manzana","f2"=>"pera");
echo "esto es un array with ids $frutas[fr1] <br>";
var_dump($frutas);
echo "<br><br>";

//php obj
$verduras = (object)["v1"=>"chayote", "v2"=>"nopal"];
echo "esto es un objecto php $verduras->v2 <br>";
var_dump($verduras);
echo "<br><br>";

?>