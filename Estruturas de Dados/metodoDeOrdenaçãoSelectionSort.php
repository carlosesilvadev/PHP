<?php

$lista = [];
$contador = rand(2,10);


while($contador){
    $lista[] = rand(1,100);
    $contador--;
}

foreach($lista as $item){
    echo $item."\t";
}

$indice=0;

while($indice < count($lista)-1){
    $indiceDoMenor = $indice;
    $elemento = $indice+1;

    while($elemento < count($lista)){
        if($lista[$elemento] < $lista[$indiceDoMenor]){
            $indiceDoMenor = $elemento;
        }
        $elemento++;
    }

    if($indiceDoMenor != $indice){
        $aux = $lista[$indice];
        $lista[$indice] = $lista[$indiceDoMenor];
        $lista[$indiceDoMenor] = $aux;
    }
    $indice++;
}

echo "\n";

foreach($lista as $li){
    echo $li."\t";
}