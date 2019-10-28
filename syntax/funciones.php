<?php
//SIN PARAMETRO
function saludo(){
    echo "hola <br>";  
}
saludo();

//CON PARAMETRO
function despedida($mensaje){
    echo "$mensaje Rebeca <br>";
}
despedida("bonita ");

//CON RETORNO
function suma($num1, $num2){
    return $num1 + $num2;
}
echo suma(3,2);