<?php

$lista = ['v','f','s','z','a'];

for($contador=0;$contador<count($lista);$contador++){
    echo $lista[$contador]."\t";
}

for($indice=1;$indice<count($lista);$indice++){
    $aux = $lista[$indice];
    $novoIndice = $indice-1;
    while($novoIndice>=0 && $lista[$novoIndice] > $aux){
        $lista[$novoIndice+1] = $lista[$novoIndice];
        $novoIndice--;
    }
    $lista[$novoIndice+1] = $aux;
}

echo "\n";

for($contador=0;$contador<count($lista);$contador++){
    echo $lista[$contador]."\t";
}