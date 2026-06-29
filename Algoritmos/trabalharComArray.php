<?php

/**
 * Considerando um vetor capaz de armazenar 5 elementos inteiros, mostre:
 * a) como declarar este vetor em um algoritmo
 * b) como zerar todos os elementos do vetor
 * c) como exibir os elementos do vetor em ordem crescente de indice
 * d) como exibir os elementos do vetor em ordem decrescente de indice
 */

$vetor = [5,15,25,35,45];

$vetor = [];

$vetor = [5,15,25,35,45];

for($contador=0;$contador<5;$contador++){
    echo $vetor[$contador]." ";
}

echo "\n";

for($contador=5;$contador>=0;$contador--){
    echo $vetor[$contador]." ";
}