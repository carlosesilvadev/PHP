<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

$valor = 7;
/* 
if($valor){
    echo $valor;
}else{
    echo 0;
}

 */

#Condição Ternária
echo ($valor ? $valor : 0);

#Condição ternária, onde se true retorna o próprio valor da condicional e false retorna o valor depois dos dois-pontos
echo $valor ?: 1;

echo "<hr>";

echo formatarValor(1000000);

echo "<hr>";

echo formatarNumero(50000000);