<?php 
include ("conexao.php")
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<title> Home - Dados do Banco </title>
</head>
<body>

<table width="100%" border="0" bordercolor="#000000" cellspacing="0" align="center" cellpadding="0">
	<tr bgcolor="#d3d3d3">
		<th>ID</th>
		<th>NOME</th>
		<th>ENDEREÇO</th>
		<th>BAIRRO</th>
		<th>CIDADE</th>
		<th>UF</th>
		<th>CEP</th>
		<th>FONE</th>
		<th>E-MAIL</th>
		<th>RG</th>
		<th>CPF</th>
		<th>SEXO</th>
	</tr>

	<?php

//Atribuido a variável $sql o comando/string SQL para selecionar todos os registros da tabela cliente
		$sql = "SELECT * FROM cliente ORDER BY nome";

//mysql_query() executa o comando que está na variável $sql
		$query = mysql_query($sql);

//Atribuido a variável $resultado um array(matriz) que é retornado pela função mysql_fetch_array() de todos os registros da consulta realizada com a variável $query.
//poderia usar também o mysql_result(),
		$bgcolor = "#ffffff";
		while ($resultado = mysql_fetch_array($query)) {
			
//Alterna as cores das linhas da tabela entre um registro e outro.
			if($bgcolor == "#ffffcc") {
				$bgcolor = "#ffffff";
			} else {
				$bgcolor = "#ffffcc";
			}
				print "
				<tr bgcolor=\"$bgcolor\">
					<td>$resultado[id_cliente]</td>
					<td>$resultado[nome]</td>
					<td>$resultado[endereco]</td>
					<td>$resultado[bairro]</td>
					<td>$resultado[cidade]</td>
					<td>$resultado[uf]</td>
					<td>$resultado[cep]</td>
					<td>$resultado[fone]</td>
					<td>$resultado[email]</td>
					<td>$resultado[rg]</td>
					<td>$resultado[cpf]</td>
					<td>$resultado[sexo]</td>
				</tr>
				";
		}


	?>
	
</table>

</body>
</html>