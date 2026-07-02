<?php

/**
 * 
 * Criar uma funcao para receber o ano corrente e o ano de nascimento de uma pessoa. Em seguida retornar a idade da pessoa.
 */

$anoNascimento = readline("Digite o seu ano de nascimento: ");

calcularIdade($anoNascimento);

function calcularIdade($ano){
    return printf("Você tem ".date('Y')-$ano." anos");
}