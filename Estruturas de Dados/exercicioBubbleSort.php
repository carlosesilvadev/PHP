<?php

$lista = [];

for($contador=0;$contador<10;$contador++){
    $num = rand(1,10);

    $lista[] = ($num%2 == 0) ? round($num/9,1) : round($num/2,1);

    echo $lista[$contador]."\t";
}

for($i=0; $i<count($lista); $i++){
    for($j=0; $j <count($lista)-1; $j++){
        if($lista[$j] > $lista[$j+1]){
            $aux = $lista[$j];
            $lista[$j] = $lista[$j+1];
            $lista[$j+1] = $aux;
        }
    }
}

echo "\n";

for($contador=0;$contador<10;$contador++){
    echo $lista[$contador]."\t";
}