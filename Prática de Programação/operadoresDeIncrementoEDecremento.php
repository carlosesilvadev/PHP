<?php

$a = 3;
$b = 7;
$c = 7;
$d = 1;

$x;
$y;

$a++;
$b--;

$x = $c++;
$y = ++$d;

print "a = $a\n";
print "b = $b\n";
print "x = $x, c = $c\n";
print "d = $d, y = $y\n";