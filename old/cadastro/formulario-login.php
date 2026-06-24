<?php include ("conexao.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8"/>
    <title>Área de Login</title>
  </head>
  <body>

  	<form action="acesso.php" method="post">
  		<p align="center">Usuário: <input type="text" name="login" size="10"><br><br>
  		Senha: <input type="password" name="senha" size="10"><br><br>
  		<input type="submit" value="ENTRAR"></p>
  	</form>

  </body>
</html>