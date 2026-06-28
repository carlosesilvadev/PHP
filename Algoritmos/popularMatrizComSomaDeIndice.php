<?php

$matriz = [];

for($linha=1;$linha <= 3;$linha++){
    for($coluna = 1; $coluna <= 4; $coluna++){
        $matriz[$linha][$coluna] = $linha+$coluna;
    }
}

foreach($matriz as $linha){
    foreach($linha as $coluna){
        echo "$coluna ";
    }
    echo "\n";
}