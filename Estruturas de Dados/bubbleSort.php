<?php

//$lista = ['v','f','s','z','a'];
$lista = [120,20,33,4,15];

echo "LISTA DESORDENADA:\n";

foreach($lista as $item){
    echo "$item ";
}

echo "\nLISTA ORDENADA:\n";
bubbleSort($lista);

function bubbleSort($lista){

    $tamanho = count($lista);

     for($linha=0;$linha<$tamanho;$linha++){
        for($coluna=0;$coluna < $tamanho-$linha;$coluna++){
            if($lista[$coluna] > $lista[$coluna+1]){
                $aux = $lista[$coluna];
                $lista[$coluna] = $lista[$coluna+1];
                $lista[$coluna+1] = $aux;
            }
        }
    }

    foreach($lista as $item){
        echo "$item ";
    }
}