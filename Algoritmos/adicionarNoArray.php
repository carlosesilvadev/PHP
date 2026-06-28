<?php

$nomes = [];
$contador = 0;

do{
    $nomes[] = readline("Digite um nome: ");
    $contador++;
}while($contador < 8);

foreach($nomes as $nome){
    echo $nome." ";
}