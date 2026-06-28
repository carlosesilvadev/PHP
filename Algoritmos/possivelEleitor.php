<?php

/**
 * Programa que recebe a idade de cada um dos 500 alunos matriculados em uma escola de
 * ensino médio. O programa deverá verificar, calcular e apresentar na tela:
 * . A quantidade de alunos que podem ser eleitores, pois têm a idade mínima de 16 anos
 * · A média de idade dos alunos que ainda não podem ser eleitores
 */

$contador = 0;
$naoEleitor = 0;
$possivelEleitor = 0;
$media = 0;

do{

    //$idade = readline("Digite a idade do ano: ");
    $idade = rand(14,18);
    echo "Idade do aluno: $idade\n";

    //($idade >= 16) ? $possivelEleitor += 1 : $naoEleitor += $idade;

    if($idade >= 16){
        $possivelEleitor += 1;
    } else{
        $naoEleitor += $idade;
        $media++;
    }

    $contador++;
}while($contador < 50);

echo "Quantidade de possíveis eleitores: $possivelEleitor";

if($media > 0){
    echo "\nMedia de idade de não eleitores: ",round($naoEleitor/$media);
}else{
    echo "\nNão existe aluno menor de 16 anos.";
}