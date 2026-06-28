<?php

/**
 * Um empresário do ramo de estacionamentos necessita de um programa para seu computador
 * que controle o valor a ser pago por cada carro estacionado. Os valores de tabela e criterios de
 * cobrança são:
 * 1ª. hora: R$ 8,00
 * 2ª. hora: R$ 15,00
 * A partir da 3ª. hora: R$ 5,00 a hora
 * O tempo de permanencia no estacionamento e controlado por horas, nao havendo nenhuma tolerancia.
 * Faça um programa que receba a hora de entrada e a hora de saída, calcule o tempo de permanência e o
 * valor a ser pago, considerando que o funcionamento e em horario comercial (das 08:00 as 18:00) e um
 * relógio configurado para 24 horas.
 */

$horarioEntrada = readline("Hora de Entrada: ");
$horarioSaida = readline("Hora de Saida: ");
$totalDeHoras = $horarioSaida - $horarioEntrada;
$valorTotal = 0;

if($totalDeHoras === 1){
    $valorTotal += 8;
}elseif($totalDeHoras === 2){
    $valorTotal += 15;
}else{
    for($i=0;$i<$totalDeHoras;$i++){
        $valorTotal += 5;
    }
    $valorTotal += 5;
}

echo "Você ficou estacionado por $totalDeHoras"."h e vai pagar o total de R$$valorTotal";