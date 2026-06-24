<?php include ("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha' AND ativo = 'S'";

$consulta = mysql_query($sql);

$registros = mysql_num_rows($consulta);

if($registros == 0) {
	print "<html>
        <body>
          <p align=\"center\">Usuário não encontrado!</p>
          <p align=\"center\"><a href=\"formulario-login.php\">Voltar</p>
        </body>
      </html>
        ";
} else {
	//Configura cookie para determinar que o usuário está logado, caso feche a janela ou tente acessar mais tarde
	setcookie('login_usuario', $login);
	setcookie('senha_usuario', $senha);

	//Redireciona para o index.php com link = 1
	header("location: index.php?link=1");
}

?>