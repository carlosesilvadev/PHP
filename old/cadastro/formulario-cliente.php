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
			  <form action="gravar.php" method="post" name="formulario-cliente">
			    <table width="100%" border="1" cellspacing="0" cellpadding="0">
			    	<tr align="center">  <th colspan="6">Cadastro de Clientes</th>  </tr>
			    	<tr>
			    	  <td>Nome:</td>
			    	  <td colspan="5"><input type="text" size="68" name="nome"></td>
			    	</tr>

			    	<tr>
			    	  <td>Endereço:</td>
			    	  <td colspan="5"><input type="text" size="68" name="endereco"></td>
			    	</tr>

			    	<tr>
			    	  <td>Bairro:</td>
			    	  <td colspan="5"><input type="text" size="68" name="bairro"></td>
			    	</tr>
					
					<tr>
			    	  <td>Cidade:</td>
			    	  <td width="38%"><input type="text" size="30" name="cidade"></td>
			    	  <td width="8%">CEP:</td>
			    	  <td width="20%"><input type="text" size="15" name="cep"></td>
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
			    	  <td width="38%"><input type="text" size="30" name="fone"></td>
			    	  <td width="8%">CPF:</td>
			    	  <td width="20%" colspan="5"><input type="text" size="15" name="cpf"></td>
			    	</tr>

			    	<tr>
			    	  <td>Email:</td>
			    	  <td colspan="5"><input type="text" size="68" name="email"></td>
			    	</tr>
			    	
			    	<tr>
			    	  <td>Sexo:</td>
			    	  <td colspan="5"><input type="radio" name="sexo" value="M" checked>Masculino
			    	  <input type="radio" name="sexo" value="F">Feminino</td>
			    	</tr>

			    	<tr>
			    		<td colspan="6" align="center"><input type="submit" value="SALVAR">
			    		<input type="reset" value="REDEFINIR"></td>
			    	</tr>
			    </table>
			  </form>
			</td>
		</tr>
	</table>

  </body>
</html>