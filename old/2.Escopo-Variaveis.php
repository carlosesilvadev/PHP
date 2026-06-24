<?php

$a = 2;
$b = 15;
$c = $a + $b;

/*
function soma()
{
	echo "Entrou na função soma"; echo "<br>";
	echo "O valor da variavel c é: ". $c;
	#Não vai funcionar por que a variável c é do programa principal e não local da função soma.
}*/

/*function soma()
{
	#Para funcionar tem que referenciar como global, aí vai funcionar normalmente
	global $c;
	echo "Entrou na função soma";
	echo "<br>";
	echo "O valor da variavel c é: ". $c;
}*/

function soma()
{
	#Outra forma para que o escopo da variável c seja acessado por essa funçõa é utilizando $GLOBALS['nome_da_variavel']
	echo "modificado";
	echo "<br>";
	echo "O valor da variavel c é: ". $GLOBALS['c'];
}

echo "O valor da variável a é: ". $a;
echo "<br>";
#Se for usar código html tem que estar dentro de aspas
echo "O valor da variável b é: ". $b;
echo "<br><br>";
# O '.' serve para concatenar o texto com o valor das variáveis.

#Chama a função soma lá de cima:
soma();
?>