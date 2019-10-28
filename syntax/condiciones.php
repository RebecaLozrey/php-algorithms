<?php
// IF STATEMENT
$current = 4;
$previous = 3;
if ($current < $previous) { echo "Current smaller than Previous <br>";}
else { echo "Previous is smaller than Current <br>";}

$fecha = "sabado";

//SWITCH SATEMENT
switch($fecha){

    case 'sabado':
    echo "inicia el sabado <br>";
    break;
    
    case 'domingo':
    echo "inicia el domingo <br>";
    break;

    default:
    echo "voy a trabajar <br>";
}

//SIMPLW WHILE
$n = 0;
while ($n < 5){
    echo $n++."<br>";
}

//DO WHILE
$m = 0;
do{
    echo $m++;
}
while($m < 9);

echo "<br>";

//FOR LOOP
//ITERATION
for ($i = 0; $i <= 5; $i++){
    echo $i." > ";
}
?>