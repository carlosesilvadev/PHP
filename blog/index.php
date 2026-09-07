<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

$numero = 1;

/* while($numero > 0){
    echo $numero++;
} */

for($contador = 1; $contador <= 10; $contador++){
    echo (!($contador%2) ? $contador.' é par' : $contador.' é impar')."<br>";
}

echo "<br>";

for($tabuada = 1; $tabuada <= 10; $tabuada++){
    for($numero = 1; $numero <= 10; $numero++){
        echo $tabuada." X ".$numero." = ".$tabuada*$numero."<br>";
    }
    echo "<hr>";
}