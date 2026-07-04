<?php

$vet = ['v','f','s','z','a'];

foreach($vet as $v){
    echo $v."\t";
}

for($i=0; $i < (count($vet)-1);$i++){
    $min = $i;
    for($j=($i+1); $j < (count($vet));$j++){
        if($vet[$j] < $vet[$min]){
            $min = $j;
        }
    }

    if($i != $min){
        $k = $vet[$i];
        $vet[$i] = $vet[$min];
        $vet[$min] = $k;
    }
}

echo "\n";

foreach($vet as $v){
    echo $v."\t";
}