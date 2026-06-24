<?php
include ("conexao.php");

$nome		= $_POST['nome'];
$endereco 	= $_POST['endereco'];
$bairro 	= $_POST['bairro'];
$cidade 	= $_POST['cidade'];
$cep 		= $_POST['cep'];
$uf 		= $_POST['uf'];
$fone 		= $_POST['fone'];
$cpf 		= $_POST['cpf'];
$email 		= $_POST['email'];
$sexo 		= $_POST['sexo'];

//Comando SQL para inserir os dados do formulário no banco
$sql = "INSERT INTO cliente (nome, endereco, bairro, cidade, cep, uf, fone, cpf, email, sexo)
		VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$cep', '$uf', '$fone', '$cpf', '$email', '$sexo')";
//Executa o comando de inserção dos dados do formulário no banco
$query = mysql_query($sql) or die ("Houve um erro na gravação dos dados, verifique os valores passados!");

//print "Dados gravados com sucesso.";

//Quando os dados forem gravados vai direto para index.php atribuindo a variavel link o indice 1, o que faz com que vá direto para a tela de home, onde são apresentados os dados do banco.
header("location:index.php?link=1");

?>