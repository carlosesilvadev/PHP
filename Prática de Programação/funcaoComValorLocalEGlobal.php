<?php

$x = 10;

porvalor($x);

printf("X = $x\n");

function porvalor($a){
    global $x;
    $a = 5;
    printf("X = $x | A = $a");
}