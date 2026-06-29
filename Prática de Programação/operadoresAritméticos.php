<?php

$a = 50;$b = 50;

$a += $b;
printf("Atribuição com adição...... a = $a\n");

$b = 30;
$a -= $b;
print("Atribuição com Subtração.... a = $a\n");

$b = 15;
$a *= $b;
echo("Atribuição com Multiplicação.... a = $a\n");

$b = 50;
$a /= $b;
echo "Atribuição com divisão...... a = $a\n";

$b = 6;
$a %= $b;
print_r("Módulo ou Resto...... a = $a");