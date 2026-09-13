<link rel="stylesheet" href="estilo.css">
<?php

include 'sistema/configuracao.php';
include 'sistema/Nucleo/Mensagem.php';
include 'Helpers.php';

$msgAlerta = new Mensagem;

echo $msgAlerta->alertaErro('Oops!Algo de errado não está certo!')->renderizar();
echo $msgAlerta->alertaSucesso('Tada! Operação realizada com sucesso.')->renderizar();
echo $msgAlerta->alertaInformacao('Mensagem informativa para mais detalhes.')->renderizar();
echo $msgAlerta->alertaAviso('Alerta! Revisar esta operação para evitar um erro.')->renderizar();