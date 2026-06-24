<?php

/*Operadores Lógicos*/

#echo "<br>";

$a = 10;
$b = 20;
$c = "certo";

print "Operador &&, AND <br>";

if(($a >= 10) && ($b <= 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a >= 10) && ($b < 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a > 10) && ($b <= 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a > 10) && ($b < 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

print "Operador ||, OR <br>";

if(($a >= 10) || ($b <= 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a >= 10) || ($b < 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a > 10) || ($b <= 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($a > 10) || ($b < 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

print "Operador !, NOT <br>";

if(!($b < 20))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

if(($b < 20) || !($a >= 10))
	print "Verdadeiro";
else
	print "Falso";

echo "<br>";

?>