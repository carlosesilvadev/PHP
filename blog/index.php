<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

echo slug("    Adão \"Negro\" - '2022'      ")."<hr>";
echo slug("Avatar 2: O Caminho da Água")."<hr>";
echo slug("Não! Não      Olhe!")."<hr>";
echo slug("Sonic 2 - O Filme")."<hr>";
echo slug("NOVA SÉRIE NO DISNEY+!")."<hr>";
echo slug("100 Melhores filmes")."<hr>";
echo slug("teste!@###$%6¨%%¨,*.:/?\|,")."<hr>";