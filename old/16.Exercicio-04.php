<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Ler nome do aluno e suas quatro notas bimestrais e calcular a média</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		<?php

			print "Aluno: ".$_POST['nome-aluno'];
			echo "<br>";
			print "Média do aluno: ".
			calcularMedia($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4']);

			function calcularMedia($n1, $n2, $n3, $n4) {
				return ($n1 + $n2 + $n3 + $n4)/4;
			}
			
		?>

	</body>
</html>