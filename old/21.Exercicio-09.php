<!DOCTYPE html>
<html lan="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Exercício - Imprimir a tabuada de um determinado número</title>
	</head>
	<body>
		
		<h2 style="text-align: center">carloseduardo.site11.com</h2>
		<!--
		date()

		"d" - retorna o dia do mês com o zero [01 - 31]
		"j" - retorna o dia do mês sem o zero.[1-31]

		"D" - retorna o dia da semana com três letras(Mon-Fri)
		"l" - dia da semana completo

		"F" - nome completo do mês
		"m" - retorna o número do mês com zero
		"M" - retorna os três caracteres do mês[Jan-Dec]
		"n" - retorna o número do mês sem o zero.

		"g" - retorna a hora no formato de 12 horas sem começar com 0(1-12)
		"G" - retorna a hora no formato de 24 horas sem começar com 0(1-23)
		"h" - retorna a hora no formato 12 horas com zero(01-12)
		"H" - retorna a hora no formato 24 horas com zero(01-23)
		"i" - retorna os minutos começando do zero(00-59)

		"s" - retorna os segundos com o zero(00-59)

		"t" - retorna a quantidade de dias no mês atual

		"W" - retorna o número do dia da semana(0-6)

		"Y" - retorna o ano com quatro digitos.
		"y" - retorna o ano com dois digitos.

		"z" - retorna o numero do dia atual(1-365/366)
		-->

		<?php

		$dia_da_semana = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");

		print "Dia da semana: ".date("w")."<br>";

		$diaSemana = date("w");
		$dia_extenso = $dia_da_semana[$diaSemana];
		print "Dia da semana(pt-BR): ".$dia_extenso;


		?>

	</body>
</html>