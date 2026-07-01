<?php

$x= 10;
por_ref($x);

echo("\nX = ".$x);

function por_ref(&$a){
    global $x;
    $a = 11;

    print "X = $x | A = $a";
}