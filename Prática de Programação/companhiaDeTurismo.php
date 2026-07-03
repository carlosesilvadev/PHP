<?php

$nome = readline("Digite o nome do passageiro: ");
$idade = readline("Digite a idade do passageiro: ");
$mes = readline("Digite o mês da viagem: ");
$precoBase = readline("Digite o preço base da passagem: ");
$valorFinal = $precoBase;

if($mes == 'março' || $mes == 'abril' || $mes == 'maio' || $mes == 'junho' || $mes == 'setembro' || $mes == 'outubro'){
    $valorFinal -= $precoBase*0.3;
}

if($idade > 65 || $idade < 10){
    $valorFinal -= $precoBase*0.2;
}

class Passagem{
    public $nome;
    public $idade;
    public $mes;
    public $valorFinal;
}

$bilhete = new Passagem();

$bilhete->nome = $nome;
$bilhete->idade = $idade;
$bilhete->mes = $mes;
$bilhete->valorFinal = $valorFinal;

echo "\tPassagem - Bilhete:\n".
"Passageiro: $bilhete->nome\n".
"Idade: $bilhete->idade\n".
"Mês da Viagem: $bilhete->mes\n".
"Valor da Passagem: R$$bilhete->valorFinal\n";