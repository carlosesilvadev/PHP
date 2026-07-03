<?php

$lista = [];

$qtdItensDaLista = rand(1,10);

for($contador=0;$contador < $qtdItensDaLista; $contador++){
    $lista[$contador] = rand(10,100);
}

foreach($lista as $item){
    echo $item." ";
}

for($linha=0;$linha < $qtdItensDaLista;$linha++){
    for($coluna=0;$coluna < $qtdItensDaLista-$linha;$coluna++){
        if($lista[$coluna] > $lista[$coluna+1]){
            $auxiliar = $lista[$coluna];
            $lista[$coluna] = $lista[$coluna+1];
            $lista[$coluna+1] = $auxiliar;
        }
    }
}

echo "\n";

foreach($lista as $item){
    echo $item." ";
}