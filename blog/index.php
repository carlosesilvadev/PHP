<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

echo $cpf = '427.586.838-22';

echo "<hr>";

echo $limpaCPF = preg_replace("/[^0-9]/","", $cpf);

echo "<hr>";

var_dump(validarCPF($cpf));