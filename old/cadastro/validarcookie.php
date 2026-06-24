<?php
  //Verifica se a variável foi setada/inicializada
  if(isset($_COOKIE['login_usuario'])) {
    $login_usuario = $_COOKIE['login_usuario'];
  }

  if(isset($_COOKIE['senha_usuario'])) {
    $senha_usuario = $_COOKIE['senha_usuario'];
  }

//Verifica se as variáveis não estão vazias, se estivem vazias lá embaixo mostra a mensagem que o usuário não tem permissão de acesso, mas se tiver algo, será validado com uma consulta no BD para identificar se o usuário realmente existe.
  if(!(empty($login_usuario) || empty($senha_usuario))) {
      include ("conexao.php");

      $sql = "SELECT * FROM login WHERE login = '$login_usuario' AND senha = '$senha_usuario' AND ativo = 'S'";

      $query = mysql_query($sql);

      $registros = mysql_num_rows($query);

      //Se retornar zero, isso quer dizer que de alguma forma o usário conseguiu inserir os dados para logar, mas não confere com os dados que tem no BD, sendo assim as variaveis globais cookies serão zeradas
      if($registros == 0) {
        //Desta forma sem um segundo parâmetro, somente o nome do cookie o cookie é destruido na hora
        setcookie('login_usuario');
        setcookie('senha_usuario');
        //Vai direto para tela de login
        header("location: formulario-login.php");
        exit;
      }

  } else {
        //Vai direto para tela de login
        header("location: formulario-login.php");
        exit;
  }
?>