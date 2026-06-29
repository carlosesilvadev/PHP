<?php

/**
 * Programa que receba 15 valores reais que devem ser armazenados em um vetor. Após a
 * digitação de todos os valores, mostre-os na tela, altere todos os valores para sua metade
 * respectiva e imprima os resultados atuais.
 */

$numeros = [];

for($contador=1;$contador<=15;$contador+=2){
    $numeros[] = ($contador+4)/2;
}

foreach($numeros as $numero){
    echo $numero,"\t";
}

echo "\n";

foreach($numeros as $numero){
    echo $numero/2,"\t";
}