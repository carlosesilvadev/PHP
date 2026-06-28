<?php

$contador = 3;
$media = 0;

do{
    $media += readline("Digite uma nota: ");
    $contador--;
}while($contador > 0);

echo "A média é de: ".round($media/3,1);