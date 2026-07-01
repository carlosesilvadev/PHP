<?php

$x = 7;

dobrar($x);

printf("X = $x\n");

function dobrar($num){
    global $x;
    $dobro = 2 * $num;
    print "X = $x | Dobro = $dobro\n";
}