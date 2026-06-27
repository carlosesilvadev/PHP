<?php

/* Elaborar um programa que solicite ao usuário um inteiro (raio de uma esfera) e exiba o volume dessa esfera com base na seguinte definição:

V = 4 * PI*raio³

*/

$raio = readline("Insira o valor do raio:");

//Aqui eu coloquei 4/3 porque é a fórmula padrão para calcular o volume
$volume = 4/3 * pi() * pow($raio,3);

echo "O volume do círculo com raio $raio é de: ".round($volume,2);

?>