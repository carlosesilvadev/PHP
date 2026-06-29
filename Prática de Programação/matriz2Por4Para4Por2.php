<?php

$matriz2Por4 = [
    [1,2,3,4],
    [5,6,7,8]
];

$matriz4Por2 = [];

foreach($matriz2Por4 as $linha){
    foreach($linha as $coluna){
        echo "$coluna\t";
    }
    echo "\n";
}

echo "\n";

for($linha=0;$linha < count($matriz2Por4[0]);$linha++){
    for($coluna=0;$coluna <count($matriz2Por4);$coluna++){
        $matriz4Por2[$linha][$coluna] = $matriz2Por4[$coluna][$linha];
        echo $matriz4Por2[$linha][$coluna]."\t";
    }
    echo "\n";
}