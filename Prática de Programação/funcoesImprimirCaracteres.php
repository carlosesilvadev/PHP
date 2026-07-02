<?php

$t = 3;
f_01($t);

function f_02($c1){
    //printf("$c1");
    printf(chr(219));
}

function f_03($c2){
    //printf("$c2");
    printf(chr(176));
}

function f_01($n){
    for($linha = 1; $linha <= $n; $linha++){
        for($coluna = 1; $coluna <= $n; $coluna++){
            (($linha+$coluna) % 2 == 0) ? f_02('x') : f_03('+');
        }
        printf("\n");
    }
    printf("\n");
}