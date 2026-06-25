<?php

//VARIÁVEIS:

$primeirominusculo = "Bob";
$segundoMaiusculo = "John";

echo $primeirominusculo,"<br>";
echo $segundoMaiusculo,"<br>";

$_comecaComSublinhado = 'Nome Válido';

echo $_comecaComSublinhado;

echo "<br>";

//NOMES OBSCUROS DE VARIÁVEIS:

${'invalid-name'} = 'bar';
$name = 'invalid-name';
echo ${'invalid-name'}, " ", $$name;

?>