<link rel="stylesheet" href="estilo.css">
<?php

Use Sistema\Nucleo\Controlador;

include_once 'vendor/autoload.php';

$controlador = new Sistema\Nucleo\Controlador('sunset');

$outraManeiraDeInstanciarObjetoSemCaminho = new Controlador('tipo');

echo '<hr>';

var_dump($controlador);
var_dump($outraManeiraDeInstanciarObjetoSemCaminho);

echo Sistema\Nucleo\Helpers::saudacao();

echo ANIMAL[1];