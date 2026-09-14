<link rel="stylesheet" href="estilo.css">
<?php

include 'sistema/configuracao.php';
include 'sistema/Nucleo/Mensagem.php';
include 'Helpers.php';

/*$msgAlerta = new Mensagem;

echo $msgAlerta->alertaErro('Oops!Algo de errado não está certo!')->renderizar();
echo $msgAlerta->alertaSucesso('Tada! Operação realizada com sucesso.')->renderizar();
echo $msgAlerta->alertaInformacao('Mensagem informativa para mais detalhes.')->renderizar();
echo $msgAlerta->alertaAviso('Alerta! Revisar esta operação para evitar um erro.')->renderizar(); */

#Primeiro entre parenteses instancio o objeto da classe e depois dos parenteses realizo a chamada de cada método, sendo o primeiro da mensagem de alerta e o segundo método para renderizar o elemento HTML na página
echo (new Mensagem())->alertaAviso('Mensagem informativa para mais detalhes.')->renderizar();

#Aqui eu não precisei chamar o método renderizar, porque utilizei o método mágico __toString() na classe para chamar o renderizar() no proprio objeto $this
echo (new Mensagem())->alertaErro('Perigo, você cometeu um erro');

#Aqui é um exemplo de como posso usar no trabalho
#$resultadoDaConsulta = (new Read())->ExeRead(DB_PAINEIS, $Query)->getResult();