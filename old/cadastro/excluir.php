<?php
include ("conexao.php");

$id_cliente = $_POST['id_cliente'];

//Comando SQL para DELETAR/EXCLUIR os dados do formulário-cliente-excluir do banco
$sql = "DELETE FROM cliente WHERE id_cliente = '$id_cliente'";

//Executa o comando de inserção dos dados do formulário no banco
$query = mysql_query($sql) or die ("Houve um erro na exclusão dos dados, verifique os valores passados!");

//Quando os dados forem excluidos vai direto para index.php atribuindo a variavel link o indice 1, o que faz com que vá direto para a tela de home, onde são apresentados os dados do banco.
header("location:index.php?link=1");

?>