<?php

$valorPremio = 0;

$valorDaAposta = readline("Valor da Aposta: ");

$bola1 = readline("1ª Bola: '1' Preta ou '2' Vermelha: ");
$bola2 = readline("2ª Bola: '1' Preta ou '2' Vermelha: ");

switch(true){
    case ($bola1 == 2 && $bola2 == 2):
        $valorPremio += $valorDaAposta*2;
        break;
    case ($bola1 == 2 && $bola2 == 1):
        $valorPremio += $valorDaAposta;
        break;
    case ($bola1 == 1 && $bola2 == 2):
        $valorPremio += $valorDaAposta/2;
        break;
}

echo "Valor do Prêmio: R$$valorPremio";