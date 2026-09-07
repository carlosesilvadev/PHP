<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

echo $cpf = '85167495253';

echo "<hr>";

echo (validaCPF($cpf) ? 'CPF válido!' : 'CPF Inválido!');