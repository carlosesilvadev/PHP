<?php

//OPERADORES:

echo "<h1>Oposição</h1>";

$numPositivo = 5;

echo "Atual: ", $numPositivo;
echo "<br>Negativando: ",-$numPositivo;

echo "<h1>Adição</h1>";

$num1 = 12;
$num2 = 10;
$soma = $num1 + $num2;

echo "$num1 + $num2 = $soma";

echo "<h1>Subtração</h1>";

$subtracao = $num1 - $num2;

echo "$num1 - $num2 = $subtracao";

echo "<h1>Multiplicação</h1>";

$multiplicacao = $num1 * $num2;

echo "$num1 * $num2 = $multiplicacao";

echo "<h1>Divisão</h1>";

$divisao = $num1 / $num2;

echo "$num1 / $num2 = $divisao";

echo "<h1>Resto</h1>";

$resto = $num1 % $num2;

echo "$num1 % $num2 = $resto";

echo "<h1>Exponenciação</h1>";

$exponenciacao = $num1 ** $num2;

echo "$num1 ** $num2 = $exponenciacao";

echo "<h1>Pós-incremento</h1>";

$a = 5;
var_dump($a++);
var_dump($a);

echo "<h1>Pré-incremento</h1>";

$a = 5;
var_dump(++$a);
var_dump($a);

echo "<h1>Pós-decremento</h1>";
$a = 5;
var_dump($a--);
var_dump($a);

echo "<h1>Pré-decremento</h1>";
$a = 5;
var_dump(--$a);
var_dump($a);

echo '== String Alfabética ==';
$s = 'A';

for($n=0; $n<6; $n++){
    echo ++$s;
}
echo "<h1>Operadores de Atribuição</h1>";

$a = ($b = 4) + 5; // b=4 e a=9;
var_dump($a);

echo "<h1>Atribuições Combinadas</h1>";

$a = 3;
$a += 5;

$b = "Bom ";
$b .= "Dia!";

var_dump($a, $b);

echo "<h1>Atribuições por Referência</h1>";

$a = 3;
$b = &$a; //$b é uma referência de $a

print "A: $a\n";
print "B: $b\n";

$a = 4;

print "<br>A: $a\n";
print "B: $b\n";

print "<h1>Concatenação de Strings</h1>";
$a = "Olá ";
$b = $a . "mundo!";
var_dump($b);

$a = "Olá ";
$a .= "mundo!";

var_dump($a);

print "<h1>Operador de União de Array</h1>";

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b;
echo "União de \$a e \$b: \n";
var_dump($c);
?>