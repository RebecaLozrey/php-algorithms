<?php

$multi = [

    [1,4,6],
    [9,4,7],
    [1,5,7],

    ];

$multi_assoc = [

    "first" => [1,4,6],
    "second" => [9,4,7],
    "third" => [1,5,7],

];


echo $multi[2][2]."<br>";
echo $multi_assoc["third"][2]."<br>";