<?php

/**
 * 
 * Escreva funcão que troque o conteudo de 2 variáveis inteiras passadas como parametro por referēncia.
 */

$num = 120;
$num2 = 213;

echo "$num | $num2\n";

dividir($num, $num2);

function dividir(&$a, &$b){
    echo ($a /= 2)." | ".($b *= $a);
}