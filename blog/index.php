<?php
#Arquivo de inicialização do Sistema

include 'sistema/configuracao.php';
require "Helpers.php";

#Funções estão dentro do arquivo Helpers.php
echo saudacao();
echo '<hr>';
echo resumirTexto();