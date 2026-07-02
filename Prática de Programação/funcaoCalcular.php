<?php

/**
 * Faça um programa que simule uma Calculadora, utilizando para cada operação básica uma função.
 * Crie no programa principal um menu de opcoes conforme o lay-out abaixo:
 *
 *	Calculadora
 *
 *Digite o primeiro número: 
 *Digite o segundo número: 
 *
 *	Escolha
 *1.Adição
 *2.Subtração
 *3.Multiplicação
 *		Opção:
 *4.Divisão
 *
 * 
 */

echo "\tCalculadora\n";

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

echo "\n\n\tEscolha\n";

echo "1.Adição\n2.Subtração\n3.Multiplicação\n4.Divisão\n\t\t";

$opcao = readline("Opção: ");

echo calcular($numero1, $numero2, $opcao);

function calcular($a, $b, $operador){
    switch($operador){
        case 1: return $a+$b; break;
        case 2: return $a-$b; break;
        case 3: return $a*$b; break;
        case 4: return $a/$b; break;
    }
}