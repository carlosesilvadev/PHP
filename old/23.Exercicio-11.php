<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Obter os dados a partir de um formulário em HTML e enviar para uma página php para tratar os dados inseridos pelo usuário com o método POST</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>
				
		<?php
				$nome = $_POST['nome'];
				$endereco = $_POST['endereco'];
				$estado = $_POST['estado'];
				$genero = $_POST['genero'];
				$profissao = $_POST['profissao'];
				$preferencia1 = $_POST['opcao1'];
				$preferencia2 = $_POST['opcao2'];
				$preferencia3 = $_POST['opcao3'];
				$preferencia4 = $_POST['opcao4'];
				$preferencia5 = $_POST['opcao5'];

		?>

		<h3>
			Nome: -------------- <?=$nome;?> <br>
			Endereço: ---------- <?=$endereco;?> <br>
			Estado: ------------ <?=$estado;?> <br>
			Gênero: ------------ <?=$genero;?> <br>
			Profissão: --------- <?=$profissao;?> <br><br>
			Preferencias: <br>
			<?php 
				if($preferencia1 == "Esporte") {
					print "Esporte<br>";
				}
				if($preferencia2 == "Dança") {
					print "Dança<br>";
				}
				if($preferencia3 == "Música") {
					print "Música<br>";
				}
				if($preferencia4 == "Livros") {
					print "Livros<br>";
				}
				if($preferencia5 == "Carros") {
					print "Carros<br>";
				}
			?>


		</h3>
	</body>
</html>