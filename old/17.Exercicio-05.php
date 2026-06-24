<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Imprimir a tabuada de um determinado número</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		<?php
			$numTab = $_POST['num-tabuada'];

			print "<table border='1' cellspacing='0' cellpadding='10'>
					<tr>
						<th>Tabuada</th>
						<th>Indice</th>
						<th>Resultado</th>
					</tr>
					";
			
			for ($num=1; $num <= 10; $num++) {
				$res = $num*$numTab; 
				print "<tr>
							<td>$numTab</td>
							<td>$num</td>
							<td>$res</td>
						<tr>
				";
			}
			print "</table>";

		?>

	</body>
</html>