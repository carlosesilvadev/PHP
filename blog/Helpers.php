<?php

function saudacao(){
    $hora = 2;
    $saudacao = '';

    if($hora >= 0 && $hora <= 5){
        $saudacao = 'boa madrugada';
    }
    
    if($hora >= 6 && $hora <= 12){
        $saudacao = 'bom dia';
    }

    return $saudacao;
}

#():string; ():int; ():bool -> Especifica qual é o tipo de dado que a função deve retornar.
function resumirTexto(string $texto, int $limite, string $continue = '...'):string{

    return $texto;
}