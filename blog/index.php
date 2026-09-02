<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

#echo $_SERVER['SERVER_NAME'];

#var_dump(localhost());

echo url('admin');

?>