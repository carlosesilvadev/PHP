<?php

/**
 * Sejam dois vetores, cada um contendo 5 valores numericos reais, armazenar em um terceiro vetor a média
 * aritmetica entre os valores dos dois primeiros, calcular a media dos valores do terceiro vetor, apresentar cada
 * valor do terceiro vetor comparando com a média geral
 */

$array1 = [10,20,30,40,50];
$array2 = [25,20,15,10,5];
$array3 = [];
$soma = 0;
$media;

for($contador=0; $contador<5;$contador++){
    $array3[] = ($array1[$contador]+$array2[$contador])/2;
}

foreach($array3 as $item){
    echo $item." ";
    $soma += $item;
}

echo "\nA média do terceiro array é de: ".$soma/5;