<?php

/**
 * Pedir a digitação de um número que represente o dia da semana e exibindo-o por extenso.
 */

$diaDaSemana = readline("Digite um número de 1-7: ");

switch($diaDaSemana){
    case 1:
        echo "Domingo"; break;
    case 2:
        echo "Segunda-feira"; break;
    case 3:
        echo "Terça-feira"; break;
    case 4:
        echo "Quarta-feira"; break;
    case 5:
        echo "Quinta-feira"; break;
    case 6:
        echo "Sexta-feira"; break;
    case 7:
        echo "Sábado"; break;
    default:
        echo "Digite um valor válido!";
}