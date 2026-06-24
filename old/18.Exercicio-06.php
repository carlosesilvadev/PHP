<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Imprimir a tabuada de um determinado número</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		
		<?php
			$cont = 100;
			
			while($cont <= 200) {
				if($cont % 5 == 0) {
					print $cont."<br>";
				}
				$cont++;
			}

		?>
	</body>
</html>