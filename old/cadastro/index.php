<?php 
include ("validarcookie.php"); 

?>
<!doctype html>
<html lang="pt-BR">
<head>
	<title> Página Principal - Curso Completo de PHP </title>
</head>
<body>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
<!--Cabeçalho do Layout-->
	<tr>
		<td><table width="100%" border="1" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="2"> Cabeçalho </td>
				</tr>
<!--Menu do Layout-->
				<tr>
					<td width="10%">
						<table width="100%" border="1" cellspacing="0" cellpadding="0">
								<tr><td>Menu de opções</td></tr>
								<!--index.php?link=1 será usado pelo método get ao clicar no link para atualizar esta mesma página para inicializar a variável $link-->
								<tr><td><a href="index.php?link=1">Home</a></td></tr>
								<tr><td><a href="index.php?link=2">Inserir</a></td></tr>
								<tr><td><a href="index.php?link=3">Alterar</a></td></tr>
								<tr><td><a href="index.php?link=5">Excluir</a></td></tr>
								<tr><td><a href="index.php?link=7">Consultar</a></td></tr>
								<tr><td><a href="logout.php">Sair</a></td></tr>
						</table>
					 </td>
<!-- Início do corpo do Layout-->
					<td> 
						<table width="100%" border="1" cellspacing="0" cellpadding="0">
							<tr> <td> 
									<?php
//Obtido o valor do link clicado pelo usuário e atribuido à $link
										if(isset($_GET['link'])) {
											$link = $_GET['link'];
										}
//Criado array e no índice 1 atribuido a página home.php que está no mesmo diretório que o index.php
										$pagina[1] = "home.php";
										$pagina[2] = "formulario-cliente.php";
										$pagina[3] = "selecionar-alterar.php";
										$pagina[4] = "formulario-cliente-editar.php";
										$pagina[5] = "selecionar-excluir.php";
										$pagina[6] = "formulario-cliente-excluir.php";
										$pagina[7] = "consulta.php";

//Verifica se a variável não está vazia, se tiver algo, proximo if
										if(!empty($link)) {
//Verifica se o arquivo que foi atribuido ao array existe, se sim, será feito a inclusão da página do array
											if(file_exists($pagina[$link])) {
//include usado para incluir um arquivo dentro de outro
												include $pagina[$link];
											} else {
												print "A página não foi encontrada!";
											}
										} else {
											print "Escolha alguma opção no Menu de Opções!";
										}
									?>
							</td> </tr>
						</table>
					</td>
<!-- Fim do corpo do Layout-->
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		
	</tr>
</table>

</body>
</html>