<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Usando o método GET</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>

		<table width="100%" border="1" cellspacing="0" cellpadding="0">
			<tr>
				<td><table width="100%" border="1" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="2"><img src="./imagens/fd_topo1.gif" alt="Header"></td>
					</tr>
					<tr>
						<td width="24%">
							<a href="24.Exercicio-12.php?link=1">Link1</a><br>
							<a href="24.Exercicio-12.php?link=2">Link2</a><br>
							<a href="24.Exercicio-12.php?link=3">Link3</a><br>
						</td>
						<td widt="76%"><table width="100%" border="1" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<?php
										$link = $_GET['link'];

										$pagina[1] = "21.Exercicio-09.php";
										$pagina[2] = "17.Exercicio-05.php";
										$pagina[3] = "15.Exercicio-03.php";

										if(!empty($link)) {
											if(file_exists($pagina[$link])) {
												include $pagina[$link];
											} else {
												print "Esta página não existe!";
											}
										}
									?>									
								</td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr>
		</table>
		
	</body>
</html>