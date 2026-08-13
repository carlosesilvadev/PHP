<?php
#Arquivo de inicialização do Sistema

include 'sistema/configuracao.php';
require "Helpers.php";

$texto = "texto para resumir dentro de uma variável";
$texto = 'xxx';

#Funções estão dentro do arquivo Helpers.php
echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 50);