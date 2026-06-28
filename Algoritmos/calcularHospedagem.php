<?php

/**
 * Faca um programa que controle o caixa de um hotel para recebimento de pagamento das diarias
 * de seus hóspedes. Para o cálculo do valor a pagar, sabe-se que a diária é de R$ 95,00 e a taxa de
 * serviços é estipulada de acordo com o número de diárias, conforme o descrito abaixo:
 * 15% por dia, se o número de diárias for menor do que 10.
 * 10% por dia, se o número de diárias for igual a 10.
 * 5% por dia, se o número de diárias maior do que 10.
 * O programa devera receber o numero de dias de hospedagem de um cliente, calcular e apresentar na
 * tela o valor da taxa e o total a ser pago.
 */

$diasHospedados = readline("Quantidade de dias hospedados: ");
$diaria = 95;
$valorTotal;
$valorTaxa = 0;

if($diasHospedados < 10){
    for($i=0;$i<$diasHospedados;$i++){
        $valorTaxa += $diaria*0.15;
    }
    echo "15% de Taxa serviço pelas $diasHospedados diárias no valor de R$$valorTaxa\n";
    echo "Valor Total com Taxa é de R$".$diasHospedados*$diaria+$valorTaxa;
} elseif($diasHospedados == 10){
    for($i=0;$i<$diasHospedados;$i++){
        $valorTaxa += $diaria*0.10;
    }
    echo "10% de Taxa serviço pelas $diasHospedados diárias no valor de R$$valorTaxa\n";
    echo "Valor Total com Taxa é de R$".$diasHospedados*$diaria+$valorTaxa;
} else {
    for($i=0;$i<$diasHospedados;$i++){
        $valorTaxa += $diaria*0.05;
    }
    echo "5% de Taxa serviço pelas $diasHospedados diárias no valor de R$$valorTaxa\n";
    echo "Valor Total com Taxa é de R$".$diasHospedados*$diaria+$valorTaxa;
}