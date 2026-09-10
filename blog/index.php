<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";
include 'sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();

echo $msg->texto = 'texto de teste';

echo "<hr>";

var_dump($msg);

echo "<hr>";

echo $msg->texto3 = 'texto de teste';