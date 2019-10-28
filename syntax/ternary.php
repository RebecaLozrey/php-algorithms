<?php
// ternary operators

$request = 2;

$response = ($request == 2) ? "it is a 2" : "is not a 2";
echo $response;
echo "<br><br>";
($request == 2) ? print "it is a 2" : print "is not a 2";