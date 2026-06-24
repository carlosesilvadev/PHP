<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Ler nome e imprimir na tela</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		<?php
			if (isset($_POST['enviar'])) {
				echo "O nome digitado pelo usuário foi: ";
				echo $_POST['nome'];
			}

			/*
			//Pode imprimir da seguinte forma também.
			print "O nome é: ". $_POST['nome'];
			*/
		?>
	</body>
</html>