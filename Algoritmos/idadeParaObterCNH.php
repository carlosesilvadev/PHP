<?php

/**
 * Idade para emissão da carteira de motorista
 */

$idade = readline("Qual é a sua idade?");
$anosQueFaltam;

if($idade >= 18){
    echo "Você tem $idade anos.\nPode tirar a carteira!";
}else{
    $anosQueFaltam = 18 - $idade;
    echo "Ainda falta(m) $anosQueFaltam anos.";
}