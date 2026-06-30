<?php

$a = 2;
$b = 110;
$c = multiplicar();

printf("$a x $b = $c");

function multiplicar(){
    global $a, $b;

    return $a*$b;
}