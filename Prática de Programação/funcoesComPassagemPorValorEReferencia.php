<?php

function p($x, $y, &$z){
    $z = $x + $y + $z;
    printf("\n$x | $y | $z");
}

$a = 5; $b = 2; $c = 3;

p($a, $b, $c);
p(7,$a+$b+$c,$a);
p($a*$b, $a%$b, $c);