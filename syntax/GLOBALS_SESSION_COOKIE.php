<?php

setcookie("user_name", "Rebeca", time() + 86400);
// expire at a given point in time in ms, one day

$_SESSION['user_name'] = "Daniel";

echo $_SESSION['user_name'];

// to start the session in every single page of the website
// use the function session_start() inside the header
// because the header is included in every page

// do something if the user is logger in check with ISSET

if (isset($_SESSION['user_name'])){
 echo "USER IS LOGGED IN";
}