<?php include ("conexao.php");
$clienteSelecionado = $_POST['cliente-selecionado'];

$sql = "SELECT * FROM cliente WHERE nome = '$clienteSelecionado'";

$resultado = mysql_query($sql) or die ("Não foi possível executar a consulta");

//Como tem um WHERE na consulta SQL, então a função mysql_fetch_array só vai trazer um registro da tabela cliente
$linha = mysql_fetch_array($resultado);

$id_cliente 	= $linha['id_cliente'];
$nome 			= $linha['nome'];
$endereco 		= $linha['endereco'];
$bairro 		= $linha['bairro'];
$cidade 		= $linha['cidade'];
$cep 			= $linha['cep'];
$estado 		= $linha['estado'];
$fone 			= $linha['fone'];
$cpf 			= $linha['cpf'];
$email 			= $linha['email'];
$sexo 			= $linha['sexo'];

?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8"/>
    <title>Formulário do Cliente</title>
  </head>
  <body>
  	
	<table width="63%" border="1" cellspacing="0" cellpadding="0" bordercolor="#ccc" align="center">
		<tr>
			<td>
			  <form action="alterar.php" method="post" name="formulario-cliente">
			    <table width="100%" border="1" cellspacing="0" cellpadding="0">
			    	<tr align="center">  <th colspan="6">Alterar Dados do Cliente:</th>  </tr>
			    	<tr>
			    	  <td>Nome:</td>
			    	  <td colspan="5"><input type="text" size="68" name="nome" value="<?=$nome?>">
						<input type="hidden" name="id_cliente" value="<?=$id_cliente?>">
			    	  </td>
			    	</tr>

			    	<tr>
			    	  <td>Endereço:</td>
			    	  <td colspan="5"><input type="text" size="68" name="endereco" value="<?=$endereco?>"></td>
			    	</tr>

			    	<tr>
			    	  <td>Bairro:</td>
			    	  <td colspan="5"><input type="text" size="68" name="bairro" value="<?=$bairro?>"></td>
			    	</tr>
					
					<tr>
			    	  <td>Cidade:</td>
			    	  <td width="38%"><input type="text" size="30" name="cidade" value="<?=$cidade?>"></td>
			    	  <td width="8%">CEP:</td>
			    	  <td width="20%"><input type="text" size="15" name="cep" value="<?=$cep?>"></td>
			    	  <td width="4%">UF:</td>
			    	  <td width="16%">
			    	  <select name="uf">
						<option value="UF" selected>UF</option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AM">AM</option>
						<option value="AP">AP</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MG">MG</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="PR">PR</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RR">RR</option>
						<option value="RO">RO</option>
						<option value="RN">RN</option>
						<option value="SC">SC</option>
						<option value="SE">SE</option>
						<option value="SP">SP</option>
						<option value="TO">TO</option>
					  </select>
			    	  </td>
			    	</tr>
					
					<tr>
			    	  <td>Fone:</td>
			    	  <td width="38%"><input type="text" size="30" name="fone" value="<?=$fone?>"></td>
			    	  <td width="8%">CPF:</td>
			    	  <td width="20%" colspan="5"><input type="text" size="15" name="cpf" value="<?=$cpf?>"></td>
			    	</tr>

			    	<tr>
			    	  <td>Email:</td>
			    	  <td colspan="5"><input type="text" size="68" name="email" value="<?=$email?>"></td>
			    	</tr>
			    	
			    	<tr>
			    	  <td>Sexo:</td>
			    	  <td colspan="5"><input type="radio" name="sexo" value="M" 
						<?php if($sexo == "M") echo "checked";?>
			    	  >Masculino
			    	  <input type="radio" name="sexo" value="F"
						<?php if($sexo == "F") echo "checked";?>
			    	  >Feminino</td>
			    	</tr>

			    	<tr>
			    		<td colspan="6" align="center"><input type="submit" value="ALTERAR">
			    		<input type="reset" value="APAGAR"></td>
			    	</tr>
			    </table>
			  </form>
			</td>
		</tr>
	</table>

  </body>
</html>