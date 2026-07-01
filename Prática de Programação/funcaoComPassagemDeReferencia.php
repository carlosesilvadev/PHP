<?php

function multiplicar(&$x, &$y){
    return ($x * $y);
}

$a; $b; $c;

$a = 2;
$b = 110;
$c = multiplicar($a, $b);

print "$a x $b = $c";