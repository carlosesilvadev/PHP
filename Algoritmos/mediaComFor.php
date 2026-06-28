<?php

$somaNotas = 0;

for($contador = 0; $contador < 3; $contador++){
    $somaNotas += readline("Digite a nota: ");
}

echo "A média de notas é: ".round($somaNotas/3,1);