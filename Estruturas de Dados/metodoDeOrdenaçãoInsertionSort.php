<?php

$lista = ["Maria","Sandra","André","Mario","Dirce","Sandro"];

foreach($lista as $item){
    echo $item."\t";
}

for($indice=1;$indice<count($lista);$indice++){
    $temporario = $lista[$indice];
    $indiceNovo = $indice-1;

    while($indiceNovo >= 0 && $lista[$indiceNovo] > $temporario){
        $lista[$indiceNovo+1] = $lista[$indiceNovo];
        $indiceNovo--;
    }

    $lista[$indiceNovo+1] = $temporario;
}

echo "\n";

foreach($lista as $item){
    echo $item."\t";
}