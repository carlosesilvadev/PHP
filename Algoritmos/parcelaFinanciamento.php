<?php

/**
 * A compra de um apartamento financiado tem o valor de sua prestação duplicada cada ano. Sabendo
 * que no primeiro ano o valor a ser pago e de R$ 80,00, faca um programa que calcule e mostre em
 * quantos anos a prestacao estara acima de R$ 5.000,00.
 */

$prestacao = 80;
$anos = 0;

while($prestacao < 5000){
    $anos++;
    $prestacao *= 2;
}

echo "A prestação estará no valor de R$$prestacao com $anos anos.";