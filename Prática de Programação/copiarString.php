<?php

$palavra1; $palavra2; $palavra3;

printf("Digite uma palavra qualquer: ");
$palavra1 = fgets(STDIN);

$palavra2 = $palavra1;

$palavra3 = "Palavra digitada: ";

print "$palavra3$palavra2";