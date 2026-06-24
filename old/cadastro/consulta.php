<?php include ("conexao.php") ?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Consulta dos Dados Inseridos no BD </title>
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<form action="" method="post" name="consulta">
					Digite um valor: <input type="text" name="cliente">
					<input type="submit" name="pesquisar" value="PESQUISAR">
				</form>
			</td>
		</tr>

		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>CEP</th>
						<th>UF</th>
						<th>Fone</th>
						<th>CPF</th>
						<th>E-mail</th>
						<th>Sexo</th>
					</tr>
		<?php
				$cliente = $_POST['cliente'];

				$sql = "SELECT * FROM cliente WHERE nome LIKE '$cliente%' ORDER BY nome";

				$query = mysql_query($sql);

				while($resultado = mysql_fetch_array($query)) {
					print "
					<tr>
						<td>$resultado[nome]</td>
						<td>$resultado[endereco]</td>
						<td>$resultado[bairro]</td>
						<td>$resultado[cidade]</td>
						<td>$resultado[cep]</td>
						<td>$resultado[uf]</td>
						<td>$resultado[fone]</td>
						<td>$resultado[cpf]</td>
						<td>$resultado[email]</td>
						<td>$resultado[sexo]</td>
					</tr>
					";
				}
		?>
				</table>
			</td>
		</tr>
	</table>

</body>
</html>