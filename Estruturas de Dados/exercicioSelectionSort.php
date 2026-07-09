<?php

$lista = [];

for($i=0;$i<10;$i++){
    $num = rand(1,10);

    ($num%2==0)? $lista[] = round($num/3,1) : $lista[] = round($num/2,1);

    echo $lista[$i]."\t";
}

for($i=0;$i<count($lista)-1;$i++){
    $min = $i;
    for($j=($i+1);$j < count($lista);$j++){
        if($lista[$j] < $lista[$min]){
            $min = $j;
        }
    }

    if($i != $min){
        $aux = $lista[$i];
        $lista[$i] = $lista[$min];
        $lista[$min] = $aux;
    }
}

echo "\n";

foreach($lista as $item){
    echo $item."\t";
}