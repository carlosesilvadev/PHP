<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

echo validarEmail('teste@jo.com.br') ? 'Endereço de e-mail válido' : 'E-mail inválido';
echo "<br>";
echo validarEmail('teste') ? 'Endereço de e-mail válido' : 'E-mail inválido';

echo "<hr>";
echo validarUrl('http://sispag.br') ? 'URL válida' : 'URL inválida';
echo "<br>";
echo validarUrlComFiltro('htt://h.b') ? 'URL válida' : 'URL inválida';
echo "<br>";
echo validarUrl('htt://h.b') ? 'URL válida' : 'URL inválida';
#var_dump(validarEmail('teste@nome.br'));