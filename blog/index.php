<?php
#Arquivo de inicialização do Sistema

#Carregamento opcional do arquivo
include 'configuracao.php';

#Carregamento opcional do arquivo uma única vez ao carregar a página
include_once 'helpers.php';

#Carregamento obrigatório do arquivo
require "configuracao.php";

#Carregamento obrigatório do arquivo uma única vez ao carregar a página
require_once 'configuracao.php';

require_once "sistema/configuracao.php";

print "<h1>Index</h1>";