<?php include ("conexao.php"); ?>
<!doctype html>
<html lang="pt-BR">
<head>
	<title> Selecionar para Editar Cliente </title>
</head>
<body>

<form action="index.php?link=4" method="post" name="selecionar-alterar" align="center">
	<h4>Selecione o nome:
	<select name="cliente-selecionado">
		<option selected>Clientes:</option>
		<?php
			$sql = "SELECT nome FROM cliente ORDER BY nome";
			$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta, verifique a conexão com o Banco!");

			while($registros = mysql_fetch_array($resultado)) {
				if($registros["nome"] != "") {
			?>
				<option> <?=$registros["nome"]?></option>
			<?php
				}
			}
			//mysql_free_result - liberação da variável $resultado, ou seja, zerada
			mysql_free_result($resultado);
			?>
		
		?>
		
	</select>
	<input type="submit" value="Alterar">
	</h4>
</form>

</body>
</html>