<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados,
evitando situações de conversão padrão do PHP
por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

$texto = 'Texto para resumir';

$string = 'texto';
$int = 10;
$float = 9.99;
$bool = false;
$nulo = null;

var_dump($string);
echo '<hr>';
#Funções estão dentro do arquivo Helpers.php
echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 50);