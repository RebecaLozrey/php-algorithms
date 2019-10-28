<?php

$go_bar = 1050;

function facade ($function){
    $function();
}

function secret(){
    $global_scope = $GLOBALS['go_bar'];
    echo "this is the secret number : $global_scope from secret<br>";
    global $go_bar; // gets the var from global scope too
    echo "this is the secret number : $go_bar with global keyword<br>";

}


facade(
    function() use($go_bar){
        echo "this is the secret number : $go_bar with facade<br>";
});

secret();