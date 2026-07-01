<?php

function multiplicar($numero1, $numero2){
    return $numero1*$numero2;
}

$a = 2; $b = 210;

$c = multiplicar($a,$b);

printf("O produto de $a X $b = $c");