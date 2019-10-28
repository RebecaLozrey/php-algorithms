<?php

$students = array("Gloria","Paco","Elizabeth");

function get_students(&$input_array){
    $input_array[0]="In the sky";
    foreach($input_array as $student)
    echo $student."<br>";
}
get_students($students);
echo "Same students array ";
print_r($students);