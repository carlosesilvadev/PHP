<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercicio - Ler numero inteiro positivo e exibir o dobro dele</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

<!--
			/*
			if (isset($_POST['enviar'])) {
				echo "O nome digitado pelo usuário foi: ";
				echo $_POST['nome'];
			}
			*/

			/*
			//Pode imprimir da seguinte forma também.
			print "O nome é: ". $_POST['nome'];
			*/
-->

		<?php
		
				//Armazenado o valor digitado no formulario na variável dobro já multiplicado por 2
				$dobro = $_POST['numero'] * 2;

				//Exibe o valor digitado pelo usuário
				print "Você digitou: ".$_POST['numero'];
				print "<br>";

				//Exibe o dobro do valor inserido no formulário
				print "O dobro é: ". $dobro;
				print "<br><br>";

				//Outra forma de exibir o dobro
				print "O dobro é: ".$_POST['numero']*2;

				//USANDO FUNÇÃO:
		
				print "<br><br>Usando função o dobro é: ".calcularDobro($_POST['numero']);

				function calcularDobro($num) {
					return ($num)*2;
				}

				
		?>
	</body>
</html>