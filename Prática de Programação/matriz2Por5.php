<?php

$matriz2Por5 = [];
$impares = 0;

for($linha=0;$linha<2;$linha++){
    for($coluna=0;$coluna < 5;$coluna++){
        $matriz2Por5[$linha][$coluna] = rand(0,100);
        if($matriz2Por5[$linha][$coluna] % 2 != 0){
            $impares++;
        }
        echo $matriz2Por5[$linha][$coluna]."\t";
    }
    echo "\n";
}

print "Foi registrado $impares números ímpares.";