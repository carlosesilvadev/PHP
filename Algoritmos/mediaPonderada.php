<?php

/* Programa que tenha como entrada de dados duas notas de um aluno,
calcule e apresente a média ponderada, sabendo que a primeira nota tem peso 2,5 e que a segunda nota tem peso 4,5 

Media Ponderada = (Nota1*Peso1) + (Nota2*Peso2) / (Peso1 + Peso2)

*/

$primeiraNota = readline("Digite a primeira nota: ");
$segundaNota = readline("Digite a segunda nota: ");
$pesoPrimeiraNota = 2.5;
$pesoSegundaNota = 4.5;

$mediaPonderada = ($primeiraNota*$pesoPrimeiraNota + $segundaNota*$pesoSegundaNota)/($pesoPrimeiraNota+$pesoSegundaNota);

echo "A média ponderada de ($primeiraNota x $pesoPrimeiraNota + $segundaNota x $pesoSegundaNota) / ($pesoPrimeiraNota + $pesoSegundaNota) = ".round($mediaPonderada,2);