<?php

/**
 * 4. Faça um programa que receba dados do tipo inteiro suficientes para preencher uma matriz
 * quadrada de ordem 7, calcule e mostre a quantidade de numeros impares.
 */

$matriz = [];
$qtdImpares = 0;

for($linha=1;$linha<=7;$linha++){
    for($coluna=1;$coluna<=7;$coluna++){
        $matriz[$linha][$coluna] = $linha+$coluna;
    }
}

foreach($matriz as $linha){
    foreach($linha as $coluna){
        echo $coluna."\t";
            if($coluna % 2 != 0){
                $qtdImpares++;
            }
    }
    echo "\n";
}

echo "Foi registrado um total de $qtdImpares números ímpares.";