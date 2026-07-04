<?php

$lista = [12,4,34,86,23];

foreach($lista as $elemento){
    echo $elemento."\t";
}

for($i = 1; $i < count($lista);$i++){
    $aux = $lista[$i];
    $j = $i-1;

    while($j >= 0 && $lista[$j] > $aux){
        $lista[$j+1] = $lista[$j];
        $j--;
    }
    $lista[$j+1] = $aux;
}

echo "\n";

foreach($lista as $elemento){
    echo $elemento."\t";
}