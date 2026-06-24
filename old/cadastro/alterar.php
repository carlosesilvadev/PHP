<?php
include ("conexao.php");

$id_cliente = $_POST['id_cliente'];
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

//Comando SQL para ATUALIZAR os dados do formulário-cliente-editar no banco
$sql = "
		UPDATE cliente  SET
		nome = '$nome',
		endereco = '$endereco',
		bairro = '$bairro',
		cidade = '$cidade',
		cep = '$cep',
		uf = '$uf',
		fone = '$fone',
		cpf = '$cpf',
		email = '$email',
		sexo = '$sexo'
		WHERE id_cliente = '$id_cliente'
		";

//Executa o comando de inserção dos dados do formulário no banco
$query = mysql_query($sql) or die ("Houve um erro na gravação dos dados, verifique os valores passados!");

//print "Dados gravados com sucesso.";

//Quando os dados forem gravados vai direto para index.php atribuindo a variavel link o indice 1, o que faz com que vá direto para a tela de home, onde são apresentados os dados do banco.
header("location:index.php?link=1");

?>