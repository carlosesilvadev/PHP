<?php

/* 
//Palavras Iguais vai retornar 0
echo strcasecmp("teste", "teste");

//Se a primeira palavra for maior que a segunda palavra vai retornar 1
echo strcasecmp("teste22", "teste1");

//Se a segunda palavra for maior que a primeira palavra vai retornar -1
echo strcasecmp("teste", "teste22"); 
*/

echo "Digite a primeira palavra: ";
$palavra1 = fgets(STDIN);

echo "Digite a segunda palavra: ";
$palavra2 = fgets(STDIN);

$resultado = strcasecmp($palavra1,$palavra2);

if($resultado == 0){
    echo("\nAs palavras são iguais.\n");
}elseif($resultado == 1){
    echo "\nA primeira palavra é maior que a segunda palavra.\n";
}else{
    printf ("\nA segunda palavra é maior que a primeira palavra.\n");
}