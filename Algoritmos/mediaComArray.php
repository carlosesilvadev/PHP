<?php

$notas = [];
$soma = 0;

for($contador=0;$contador<5;$contador++){
    $notas[] = readline("Digite uma nota: ");
}

foreach($notas as $nota){
    $soma += $nota;
}

echo "A média das notas é de: ".round($soma/count($notas),1);