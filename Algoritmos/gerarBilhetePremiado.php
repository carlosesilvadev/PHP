<?php

/**
 * d) Uma industria de automóveis quer premiar um de seus funcionarios no final do ano com um carro 0 km.
 * Cada empregado teve direito a um bilhete com um numero de seis digitos. O vencedor será aquele que
 * tiver o bilhete cujo número é a combinação dos dois primeiros prêmios do último concurso do ano da
 * Loteria Federal. A composicao do número do bilhete premiado é formada pelos dois últimos dígitos do
 * primeiro bilhete multiplicado pelos dois ultimos digitos do segundo bilhete premiado. Por exemplo, numero do primeiro
 * prêmio: 18.959, número do segundo prêmio: 04.133, o bilhete ganhador é o de número 1947 (59* 33).
 * Faça um programa que receba os valores da Loteria Federal, gere e mostre o numero premiado.
 */

$premio1 = readline("Primeiro Bilhete: ");
$premio2 = readline("Segundo Bilhete: ");

$premio1 /= 100;

$premio2 /= 100;

$doisDigitos = explode('.', $premio1)[1] ?? '00';

$doisDigitos2 = explode('.', $premio2)[1] ?? '00';

$novoPremio = $doisDigitos * $doisDigitos2;

echo "Novo bilhete gerado: $novoPremio";