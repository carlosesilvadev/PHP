<?php

$var = "teste";
$cor = "azul";
$valor = true;
$str = (string) $valor;

print 'O valor da variável é: $var $';
# mostra o texto exatamente como está acima

echo "<br>";
print "O valor da variável é: $var \$ \" \\";
# mostra o texto acima com o valor dentro da variável $var e os caracteres depois da barra
echo "<br>";

print "O valor da cor é $cor <br>";
print "O valor da cor é ${cor}es";

echo "<br><br>";

print "O valor de str é $str";

?>