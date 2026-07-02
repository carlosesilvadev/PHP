<?php

/**
 * Dado o numero do telefone de uma residencia, o numero de pulsos registrados para chamadas
 * locais e o valor total de todas as chamadas interurbanas, fazer um programa em C que controle a
 * conta telefônica de 50 residências contendo as seguintes funções:
 * a) Para entrada dos dados (variáveis locais);
 * b) Para calculo do valor total da conta telefônica. Sabendo-se que o valor total da conta telefônica =
 * número de pulsos locais x 0.127 + valor total de interurbanos;
 */

$contador = 50;

do{
    echo "\n".$contador."º Cliente:\n";
    coletarDados();
    $contador--;
}while($contador > 0);


function coletarDados(){
    //$telefone = readline("Digite o número de telefone: ");
    $telefone = "(".rand(11,99).") ".rand(900000000,999999999);
    echo "Telefone: $telefone\n";

    $pulsosLocais = rand(1,30);
    echo "Quantidade de pulsos locais: $pulsosLocais\n";

    $valorTotalInterurbanos = rand(1,50);
    printf("Valor total dos Interurbanos: $valorTotalInterurbanos\n");

    calcularContaTotal($telefone, $pulsosLocais, $valorTotalInterurbanos);
}

function calcularContaTotal($telefone, $pulsosLocais, $valorTotalInterurbanos){
    $valorTotal = $pulsosLocais*0.127+$valorTotalInterurbanos;
    return printf("O valor da conta do telefone $telefone é de R$".round($valorTotal,2)."\n");
}