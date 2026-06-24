<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Imprimir a tabuada de um determinado número</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		
		<?php
			
			if(($_POST['lado1'] < $_POST['lado2'] + $_POST['lado3']) && ($_POST['lado2'] < $_POST['lado1'] + $_POST['lado3']) && ($_POST['lado3'] < $_POST['lado1'] + $_POST['lado2'])) {
				if (($_POST['lado1'] == $_POST['lado2']) && ($_POST['lado2'] == $_POST['lado3'])) {
					print "É um triângulo equilátero!";
				} elseif (($_POST['lado1'] != $_POST['lado2']) && ($_POST['lado2'] != $_POST['lado3']) && ($_POST['lado3'] != $_POST['lado1'])) {
					print "É um triângulo escaleno!";
				} else {
					print "É um triângulo isósceles!";
				}
			} else {
				print "Não é um triângulo!";
			}

		?>
	</body>
</html>