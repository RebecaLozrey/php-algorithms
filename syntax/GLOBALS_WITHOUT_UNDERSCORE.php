<?php

$x = 5;

function local(){
    echo $GLOBALS['x'];
}

local();
