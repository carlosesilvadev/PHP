<?php

/*Operadores de Comparação*/

#echo "<br>";

$a = 50;
#$b = 20;
$b = 10;

#igual
print "$a == $b: ";

if ($a == $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#diferente
print "$a != $b: ";

if ($a != $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#idêntico
print "$a === $b: ";

if ($a === $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#Não idêntico
print "$a !== $b: ";

if ($a !== $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#diferente de outro jeito
print "$a <> $b: ";

if ($a <> $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#maior que
print "$a > $b: ";

if ($a > $b)
	print "Verdadeiro!";
else
	print "Falso!";

echo "<br>";

#menor que
print "$a < $b: ";

if ($a < $b)
	print "Verdadeiro!";
else
	print "Falso!";

?>