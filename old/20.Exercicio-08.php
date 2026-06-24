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

		print "Dia do mês: ".date("d");

		echo "<br>";

		print "Dia da semana: ".date("D");

		echo "<br>";

		print "Mês corrente: ".date("F");

		echo "<br>";

		print "Hora[12] sem o zero: ".date("g");

		echo "<br>";

		print "Hora[24] sem o zero: ".date("G");

		echo "<br>";

		print "Hora[12] com o zero: ".date("h");

		echo "<br>";

		print "Hora[24] com o zero: ".date("H");

		echo "<br>";

		print "Minutos com zero: ".date("i");

		echo "<br>";

		print "Dia do mês sem o zero: ".date("j");

		echo "<br>";

		print "Número do mês: ".date("m");

		echo "<br>";

		print "Segundos com zero: ".date("s");

		echo "<br>";

		print "Quantidade de dias no mês atual: ".date("t");

		echo "<br>";

		print "Número do dia da semana: ".date("w");
		
		echo "<br>";

		print "Ano com quatro digitos: ".date("Y");

		echo "<br>";

		print "Ano com dois digitos: ".date("y");
		?>

	</body>
</html>