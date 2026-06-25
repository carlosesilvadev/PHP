<?php
$a_bool = true; //Um valor booleano
$a_str = "foo"; //Um texto
$a_str2 = 'foo'; //Um texto
$an_int = 12; //Um inteiro

echo get_debug_type($a_bool),"\n";
echo get_debug_type($a_str),"\n";

//Se essa variável contiver um inteiro, aumenta o número em quatro.
if(is_int($an_int)){
    $an_int += 4;
}

var_dump($an_int);

//Se $a_bool for um texto, exibe
if(is_string($a_bool)){
    echo "String: $a_bool";
}

//Valor nulo

$variavelNula = NULL;

echo get_debug_type($variavelNula);

$acao = "mostrar_versao";
$exibir_separadores = true;

// == É um operador que testa
// igualdade e retorna um booleano
if($acao == "mostrar_versao"){
    echo "A versão é 1.23";
}

// isto não é necessário ...
if($exibir_separadores == TRUE){
    echo "<hr>\n";
}

// ... porque pode simplesmente ser escrito assim:

if($exibir_separadores){
    var_dump($exibir_separadores);
    echo "<hr>\n";
}

//Exemplo de Inteiros Literais

$a = 1234; //número decimal
$b = 0123; //número octal (equivalente a 83 em decimal)
$c = 0o123; //número octal
$d = 0x1A; //número hexadecimal(equivalente a 26 em decimal)
$e = 0b11111111; //número binário (equivalente a 255 em decimal)
$f = 1_234_567; //número decimal

//Exemplo de ponto flutuante
$g = 1.234;
$h = 1.2e3;
$i = 7E-10;
$j = 1_234.567;

//STRING

echo 'isto é uma string comum<br>';

echo "Isto é outra string comum, mas com aspas duplas<br>";

//STRING NUMÉRICA

$foo = 1 + "10.5";
echo $foo; //11.5

//ARRAY

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

//Usando a sintaxe curta:
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
echo '<br>';

var_dump($array1);
echo '<br>';
var_dump($array2);
echo '<br>';

//OBJETOS:
class foo{
    function do_foo(){
        echo "Fazendo foo como objeto.";
    }
}

$bar = new foo;
$bar->do_foo();

//ENUMERAÇÕES:

enum Suit{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s){
    //...
}

do_stuff(Suit::Spades);

echo '<br>';

//ITERÁVEL:

function gen(): iterable{
    yield 'Iteração 1';
    yield 'Iteração 2';
    yield 'Iteração 3';
}

foreach(gen() as $value){
    echo $value, "<br>";
}

?>