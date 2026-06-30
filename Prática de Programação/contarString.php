<?php

$string1 = "Universidade Nove De Julho";
$string2;

echo "Conteúdo da variável string1 = ".$string1;

print "\nNúmero de caracteres da variável string1 = ".strlen($string1);
printf("\nTamanho do vetor da variável string1 = ".strlen($string1)+1);

print("\nDigite uma string qualquer: ");
//$string2 = fgets(STDIN);
$string2 = readline();

echo("Número de caracteres da variável string2 = ".strlen($string2));

//var_dump($string1);

/* $letra = 0;

while($letra < strlen($string1)){
    echo $string1[$letra]."  ";
    $letra++;
}

echo $letra; */