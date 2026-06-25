<?php

//ARRAY:

/*
array(
    chave => valor,
    chave2 => valor2,
    chave3 => valor3,
);
*/

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

echo "<br>Utilizando a sintaxe curta<br>";

$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];

var_dump($array1, $array2);

$array0 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);

var_dump($array0);

echo "<br><br>Exemplo #3 Misturando int e string nas chaves<br>";

$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);

var_dump($array3);

echo "<br><br>Exemplo #4 Arrays indexados sem chaves<br>";

$array4 = array("foo", "bar", "hello", "world");

var_dump($array4);

echo "<br><br>Exemplo #5 Chaves em alguns elementos<br>";

$array5 = array(
    "a",
    "b",
    6 => "c",
    "d",
);

var_dump($array5);

echo "<br><br>Exemplo #7 Exemplo de índice negativo<br>";

$arrayChaveNegativa = [];

$arrayChaveNegativa[-5] = 1;
$arrayChaveNegativa[] = 2;

var_dump($arrayChaveNegativa);

echo "<br><br>Exemplo #8 Acessando elementos do array</br>";

$arrayMultidimensional = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($arrayMultidimensional["foo"]);
var_dump($arrayMultidimensional[42]);
var_dump($arrayMultidimensional["multi"]["dimensional"]["array"]);

echo "<br><br>Exemplo #9 Referenciando elemento de um array<br>";

function getArray(){
    return array(4,7,0);
}

$segundoElemento = getArray()[2];

var_dump($segundoElemento);

echo "<br><br>Remover item/itens do array<br>";

$lista = array(5 => 1, 12 => 2);

$lista[] = 56; // Isto é o mesmo que $lista[13] = 56;

var_dump($lista);

$lista["novoItem"] = 42;// Isto acrescenta um novo elemento
                // para a lista com a chave "novoItem"

var_dump($lista);

echo "<br><br>Remover item da lista com a chave 5<br>";

unset($lista[5]);

var_dump($lista);

echo "<br><br>Remover itens da lista<br>";

unset($lista);

var_dump($lista);

?>