<?php

$matriz = [];
$soma = 0;

for($linha=1;$linha<=3;$linha++){
    for($coluna=1;$coluna<=3;$coluna++){
        $matriz[$linha][$coluna] = $linha+$coluna;
        if($linha == $coluna) $soma += $linha+$coluna;
    }
}

foreach($matriz as $linha){
    foreach($linha as $coluna){
        echo "$coluna ";
    }
    echo "\n";
}

echo "A soma da linha diagonal é: $soma";