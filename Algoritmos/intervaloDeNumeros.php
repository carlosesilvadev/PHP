<?php

/**
 * Programa que recebe dois numeros inteiros quaisquer e exiba os valores compreendidos
 * do primeiro ate o segundo numero, mas somente se o primeiro for menor que o segundo.
 */

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

if($numero1 < $numero2){
    for($contador = $numero1; $contador <= $numero2; $contador++){
        echo "$contador\n";
    }
}