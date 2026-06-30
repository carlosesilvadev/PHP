<?php

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

adicao();

function adicao(){
    global $numero1, $numero2;

    echo "Resultado de $numero1 + $numero2: ".$numero1+$numero2;
}