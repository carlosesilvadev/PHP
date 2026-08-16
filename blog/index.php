<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

foreach(ANIMAL as $item){
    echo $item."<br>";
}

echo URL_DESENVOLVIMENTO;

echo "<br>";

echo constant('SITE_DESCRICAO');