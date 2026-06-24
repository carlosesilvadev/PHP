<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Usando JavaScript para validação dos dados de um formulário</title>
</head>
<body>
	
	<h2 style="text-align: center">carloseduardo.site11.com</h2>

	<?php
	$nome = $_POST['nome'];
	$antes = $nome;
	$erro = 0;

	/*substr_count($nome_da_variavel, "caractere a ser contado") - retorna a quantidade de vezes que um caractere aparece dentro de uma string*/
	$quantidadeCaractereEspecifico = substr_count($nome, "a");

	/*str_replace("caractere que tem na variavel", "caractere que deseja substituir", $nome_da_variavel_a_ser_analisada) - serve para trocar um caractere por outro, ou string*/
	//$nome = str_replace(" ", "", $nome);

	echo "<br><br>";

	/*strstr($nome_variavel, 'caracter a ser encontrado') */
	if(strstr($nome, ' ') != false) {
		$msg = "Existe um caractere vazio no email, verifique o valor.";
		$erro = 1;
	} else {
		print "Tudo OK";
	}

	echo "<br><br>";

	/*strlen($nome_variavel) retorna a quantidade de caracteres na variável.*/
	if(strlen($nome) < 8) {
		$msg = "Quantidade de caractere menor que 8!";
		$erro = 1;
	} else {
		print "Quantidade de caractere maior que 8!";
	}

	echo "<br><br>";

	/*is_numeric($nome_variavel) retorna false ou true se uma variável tem somente números ou não*/
	if(!is_numeric($nome)) {
		$msg = "Somente números, digite outro valor.";
		$erro = 1;
	} else {
		print "Só existem números";
	}

	echo "<br><br>";

	if ($erro) {
		print $msg."<br>";
		print "<a href='javascript:history.back()'> VOLTAR </a>";
	} else {
		print "Dados gravado com sucesso!";
	}

	?>
	
 <br><br>
<?=$antes;?> <br>
<?=$nome;?> <br>
<?=$quantidadeCaractereEspecifico;?>

</body>
</html>