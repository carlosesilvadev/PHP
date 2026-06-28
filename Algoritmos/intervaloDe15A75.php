<?php

/**
 * Programa que aceite somente um numero inteiro que esteja fora do intervalo entre os
 * numeros 15 e 75. O programa só será encerrado quando a regra acima for cumprida. Mostre ao final
 * o valor digitado.
 */

do{
    $numero = readline("Digite um número menor que 15 e maior que 75 para continuar: ");
}while($numero < 15 || $numero > 75);

echo "O número digitado foi $numero";