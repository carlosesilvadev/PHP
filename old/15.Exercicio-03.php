<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Ler temperatura em Fahrenheit e exibir a temperatura equivalente em Celsius</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		<?php
			/*Fórmula: C = 5/9(F-32)*/

			print "Convertido para Celsius: ".converterParaCelsius($_POST['temperatura-f']);
			print "ºC";
			
			function converterParaCelsius($f) {
				return 5/9*($f-32);
			}
		?>

	</body>
</html>