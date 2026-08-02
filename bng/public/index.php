<?php

use bng\System\Router;

require_once('../vendor/autoload.php');

Router::dispatch();

//Pode chamar qualquer função da pasta app/helpers/Functions.php, depois de incluir o arquivo em composer.json
//Recurso muito utilizado para funções genéricas

$nomes = ['joao', 'ana', 'carlos'];
// $nome = "João Ribeiro";

validarVariavel($nomes);