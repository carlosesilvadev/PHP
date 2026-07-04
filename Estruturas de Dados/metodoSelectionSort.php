<?php

$lista = ["Maria","Sandra","André","Mario","Dirce","Sandro"];

foreach($lista as $item){
    echo $item."\t";
}

$tamanhoLista = count($lista);

for($linha=0;$linha<count($lista)-1; $linha++){
    $min = $linha;
    for($coluna = ($linha+1);$coluna < count($lista);$coluna++){
        if($lista[$coluna] < $lista[$min]){
            $min = $coluna;
        }
    }
    if($linha != $min){
        $aux = $lista[$linha];
        $lista[$linha] = $lista[$min];
        $lista[$min] = $aux;
    }
}

echo "\n";

foreach($lista as $item){
    echo $item."\t";
}