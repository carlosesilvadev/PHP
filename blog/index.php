<link rel="stylesheet" href="estilo.css">
<?php

include 'sistema/configuracao.php';
include 'sistema/Nucleo/Helpers.php';
include 'sistema/Nucleo/Mensagem.php';
include 'sistema/Nucleo/Controlador.php';

Use Sistema\Nucleo\Controlador;

$controlador = new Controlador('sunset');

echo '<hr>';

var_dump($controlador);