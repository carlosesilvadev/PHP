<?php

/**
 * Cálculo da média de quatro números do tipo flutuante.
 */

$notas = [];
$media = 0;

for($i=1;$i<=4;$i++){
    $notas[] = readline("Digite a nota $i: ");
}

foreach($notas as $nota){
    $media += $nota;
}

echo "A média é de: ".$media/4;

if($media/4 >= 7){
    echo "\nAprovado com nota ".$media/4;
}