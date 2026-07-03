<?php

$lista = ["Maria","Sandra","André","Mario","Dirce","Sandro"];

foreach($lista as $pessoa){
    echo $pessoa."\t";
}

$tamanhoDaLista = count($lista);
$i = 0;

while($i < $tamanhoDaLista){
    $j = 0;
    while($j < $tamanhoDaLista-$i){
        if($lista[$j] > $lista[$j+1]){
            $aux = $lista[$j];
            $lista[$j] = $lista[$j+1];
            $lista[$j+1] = $aux;
        }
        $j++;
    }

    $i++;
}

echo "\n";

foreach($lista as $pessoa){
    echo " ".$pessoa;
}