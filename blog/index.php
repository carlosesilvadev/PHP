<link rel="stylesheet" href="estilo.css">
<?php


include 'sistema/configuracao.php';
include 'sistema/Nucleo/Helpers.php';
#include 'sistema/Nucleo/Mensagem.php';

Use Sistema\Nucleo\Helpers;

echo "Ambiente: ".(Helpers::localhost() ? 'develop' : 'production');
echo "<br>";
echo "CPF: ".Helpers::limparCPF('123.456.789.00');