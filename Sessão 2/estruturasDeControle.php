<?php
$a = 3;
$b = 2;

print "<h1>if:</h1>";

if($a > $b){
    echo "a é maior que b";
}

if($a < $b){
    echo "a é menor que b";
    $b = $a;
}

print "<h1>if else:</h1>";


if($a > $b){
    echo "a é maior que b";
} else {
    echo "a NÃO é maior que b";
}

print "<h1>elseif:</h1>";

if($a > $b){
    echo "a é maior que b";
} elseif($a == $b){
    echo "a é igual a b";
} else {
    echo "a é menor que b";
}

print "<h1>Switch:</h1>";

$i = 1;

switch($i){
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
}
print "<h1>if equivalente:</h1>";
//É equivalente a:
if($i == 0){
    echo "i é igual a 0";
} elseif ($i == 1){
    echo "i é igual a 1";
} elseif($i == 2){
    echo "i é igual a 2";
}

print "<h1>Switch sem break:</h1>";

switch($i){
    case 0:
        echo "i é igual a 0";
    case 1:
        echo "i é igual a 1";
    case 2:
        echo "i é igual a 2";
    case 3:
        echo "i é igual a 3";
}

print "<h1>Switch com case vazio:</h1>";

switch($i){
    case 0:
    case 1:
    case 2:
        echo "i é menor que 3, mas não é negativo";
        break;
    case 3:
        echo "i é 3";
}

print "<h1>Switch com default:</h1>";

switch($i){
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
        echo "i não é igual a 0, 1 ou 2";
}

print "<h1>Switch com expressão:</h1>";

$alvo = 1;
$inicio = 3;

switch($alvo){
    case $inicio - 1:
        print "A";
        break;
    case $inicio - 2:
        print "B";
        break;
    case $inicio - 3:
        print "C";
        break;
    case $inicio - 4:
        print "D";
        break;
}

print "<h1>Switch com expressão com resultado booleano:</h1>";

$deslocamento = 1;
$inicio = 3;

switch(true){
    case $inicio - $deslocamento === 1:
        print "A";
        break;
    case $inicio - $deslocamento === 2:
        print "B";
        break;
    case $inicio - $deslocamento === 3:
        print "C";
        break;
    case $inicio - $deslocamento === 4:
        print "D";
        break;
}

print "<h1>Switch com endswitch:</h1>";

switch($i):
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
        echo "i não é igual a 0, 1 ou 2";
endswitch;

print "<h1>Switch com ponto-virgula nos cases:</h1>";

$cerveja = 'heineken';

switch($cerveja){
    case 'amstel';
    case 'brahma';
    case 'stella';
    case 'heineken';
        echo 'Boa escolha';
        break;
    default;
        echo 'Por favor faça uma nova seleção...';
        break;
    }

print "<h1>Estrutura de repetição for 1:</h1>";

/*exemplo 1*/

for($i = 1; $i <= 10; $i++){
    echo $i;
}

print "<h1>Estrutura de repetição for 2:</h1>";

/*exemplo 2*/

for($i = 1; ; $i++){
    if($i > 10){
        break;
    }
    echo $i;
}

print "<h1>Estrutura de repetição for 3:</h1>";

/*exemplo 3*/

$i = 1;

for(; ; ){
    if($i > 10){
        break;
    }
    echo $i;
    $i++;
}

/*exemplo 4*/

print "<h1>Estrutura de repetição for 4:</h1>";

for($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

print "<h1>Estrutura de repetição for com random:</h1>";

$pessoas = array(
    array('nome' => 'Lucas', 'salt' => 856412),
    array('nome' => 'André', 'salt' => 215863)
);

for($i = 0; $i < count($pessoas); ++$i){
    $pessoas[$i]['salt'] = mt_rand(000000,999999);
    echo $pessoas[$i]['salt'];
    echo "<br>";
}

print "<h1>Estrutura de repetição for com random e variavel intermediaria para contar o array:</h1>";

$pessoas = [
    ['nome' => 'Lucas', 'salt' => 856412],
    ['nome' => 'André', 'salt' => 215863]
];

$tamanho = count($pessoas);

for($i = 0; $i < $tamanho; ++$i){
    $pessoas[$i]['salt'] = mt_rand(000000,999999);
    echo $pessoas[$i]['salt'], "<br>";
}

print "<h1>Estrutura de repetição while:</h1>";

$i = 1;
while($i <= 10){
    echo $i++;
}

print "<h1>Estrutura de repetição while com dois-pontos:</h1>";

$i = 1;
while($i <= 10):
    echo $i;
    $i++;
endwhile;

print "<h1>Estrutura de repetição foreach somente valor:</h1>";

/* Exemplo: somente valor */

$array = [1,2,3,17];

foreach($array as $value){
    echo "Elemento atual de \$array: $value.<br>";
}

print "<h1>Estrutura de repetição foreach com chave e valor:</h1>";

$array = array(
    'um' => 1,
    'dois' => 2,
    'três' => 3,
    'dezessete' => 17
);

foreach($array as $key => $value){
    echo "Chave: $key - Valor: $value<br>";
}

print "<h1>Estrutura de repetição foreach com array multidimensional:</h1>";

$grid = [];
$grid[0][0] = "a";
$grid[0][1] = "b";
$grid[1][0] = "y";
$grid[1][1] = "z";

//var_dump($grid);

foreach($grid as $y => $row){
    foreach($row as $x => $value){
        echo "<br>Valor na posição x=$x e y=$y: $value";
    }
}

print "<h1>Estrutura de repetição foreach com array dinâmico:</h1>";

$numeros = range(1,10);
shuffle($numeros);

foreach($numeros as $value){
    echo "$value ";
}

?>