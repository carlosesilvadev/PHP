<?php

function elogio($n):void {
    printf("Olá $n");
    printf("\nBonito nome!");
}

$nome = readline("Qual o seu nome? ");

elogio($nome);