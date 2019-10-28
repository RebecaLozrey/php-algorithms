<?php
// 7 SUPERGLOBALS START WITH AN UNDERSCORE


print_r($_SERVER);
echo "<br>";
echo "<br>";

// with parameters in the url ?someParam=3
print_r($_GET);
// GET SUPERGLOBAL GETS PARAMETERS FROM THE URL
// FORMS IN THE PAGE SEND PARAMETERS TO THE URL
echo "<br>";
echo "<br>";



// gets the information in a form
print_r($_POST);
echo "<br>";
echo "<br>";

// request superglobal includes all the post and get parameters from url or from the form
print_r($_REQUEST);
echo "<br>";
echo "<br>";



// files submited in a form
print_r($_FILES);
echo "<br>";
echo "<br>";

// to start a session use the function session_start() in the file
session_start();
print_r($_SESSION);
echo "<br>";
echo "<br>";

print_r($_COOKIE);
echo "<br>";
echo "<br>";

print_r($_ENV);
echo "<br>";
echo "<br>";