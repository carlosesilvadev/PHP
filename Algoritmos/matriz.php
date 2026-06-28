<?php

$matriz = [
    [10,20,30], //linha1
    [40,50,60] //linha2
];

//echo $matriz[1][1]; //50


foreach($matriz as $linha){
    foreach($linha as $coluna){
        echo "$coluna ";
    }
    echo "\n";
}


//Conta linhas:
//echo count($matriz);

//Conta colunas:
//echo count($matriz[1]);

/*
for($linha=0; $linha < count($matriz);$linha++){
    for($coluna=0;$coluna < count($matriz[$linha]);$coluna++){
        echo $matriz[$linha][$coluna]." " ;
    }
    echo "\n";
}
*/

/*
$linha = 0;

while($linha < count($matriz)){
    $coluna = 0;
    while($coluna < count($matriz[$linha])){
        echo $matriz[$linha][$coluna]." ";
        $coluna++;
    }
    echo "\n";
    $linha++;
}
*/