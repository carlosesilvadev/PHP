<?php

$QTD = 4;
$nomes = [];

for($contador=0;$contador < $QTD; $contador++){
    $nomes[] = readline("Digite um nome: ");
}

print "Nomes digitados: \n";

foreach($nomes as $nome){
    echo $nome."\n";
}