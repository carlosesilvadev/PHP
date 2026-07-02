<?php

$resultado = 0;

$numero = readline("Digite o 1º número: ");
$numero2 = readline("Digite o 2º número: ");

if(($numero > 0) && ($numero2 > 0)){
    calcular($numero, $numero2, '+', $resultado);
    printf("$numero + $numero2 = $resultado\n");

    calcular($numero, $numero2, '-', $resultado);
    printf("$numero - $numero2 = $resultado\n");

    calcular($numero, $numero2, '*', $resultado);
    printf("$numero * $numero2 = $resultado\n");

    calcular($numero, $numero2, '/', $resultado);
    printf("$numero / $numero2 = $resultado\n");
}

function calcular($num, $num2, $operador, &$resultado){
    switch($operador){
        case '+': $resultado = $num + $num2; break;
        case '-': $resultado = $num - $num2; break;
        case '*': $resultado = $num * $num2; break;
        case '/': $resultado = $num / $num2; break;
    }
}