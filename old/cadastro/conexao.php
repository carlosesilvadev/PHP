<?php
//Servidor do banco de dados
$host = "localhost";

//Usuário do banco default "root"
$usuario = "";

//Senha do banco default ""
$senha = "";

//mysql_connect() conecta com o banco
//or die - vai apresentar uma mensagem caso não tenha sido possível fazer a conexão
$banco = mysql_connect($host, $usuario, $senha) or die ("Não foi possível fazer a conexão com o servidor de Banco de Dados!");

//mysql_select_db() seleciona o schema da conexão feita com o mysql_connet()
//or die - exibe uma mensagem caso não seja possível selecionar o banco especificado na função mysql_select_db()
mysql_select_db("aulaphp", $banco) or die ("Não foi possível encontrar o schema especificado!")

?>