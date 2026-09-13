<link href="estilo.css" rel="stylesheet">
<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";
include 'sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();

echo $msg->sucesso("minha mensagem de sucesso!")->renderizar();
echo $msg->erro("minha mensagem de erro!")->renderizar();
echo $msg->alerta("minha mensagem de alerta!")->renderizar();
echo $msg->informa("minha mensagem de informação!")->renderizar();