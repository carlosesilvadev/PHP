<?php

$contador = 1;
$media = 0;

while($contador <= 3){
    $media += readline("Digite a $contador"."ª nota: ");
    $contador++;
}

echo "A média das notas foi de ".round($media/3,1);