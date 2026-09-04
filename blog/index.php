<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

/* echo $_SERVER['HTTP_HOST'];
echo "<br>".$_SERVER['SCRIPT_NAME'];

echo '<hr>';

var_dump($_SERVER); */

#$meses = array();

#$meses = [];

#$meses = ['Janeiro', 'Fevereiro', "Março"];
$mes = [
    'Janeiro',
    'Fevereiro',
    "Março"
];

$semana = [
    2 => 'Segunda',
    3 => 'Terça',
    4 => "Quarta"
];

$fruta = [
    'A' => 'Abobora',
    'T' => 'Tomate',
    "J" => "Jaca"
];

var_dump($mes);
echo "<hr>";
var_dump($semana);
echo "<hr>";
var_dump($fruta);
echo "<hr>";
echo "Em ".$mes[1]." é pico da safra de ".$fruta['J'].", bom pra comer na ".$semana[3]."";
echo "<hr>";
foreach($mes as $chave){
    echo $chave."<br>";
}
echo "<hr>";
foreach($semana as $chave => $valor){
    echo $chave." : ".$valor."<br>";
}
echo "<hr>";

echo saudacao()." ".dataAtual();

?>