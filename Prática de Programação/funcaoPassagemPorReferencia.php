<?php

$x = 20;

dobro($x);

printf("X = $x\n");

function dobro(&$n){
    global $x;
    $n *=2;

    printf("X = ".$x." | N = $n\n");
}