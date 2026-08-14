<?php

function saudacao(): string
{
    #https://www.php.net/manual/pt_BR/function.date-default-timezone-get.php
    #TimeZone setada para evitar erro de timezone diferente daqui de São Paulo
    date_default_timezone_set('America/Sao_Paulo');

    #https://www.php.net/manual/pt_BR/function.date.php - Função date
    echo $hora = date('H');

    #Substituido && para AND na estrutura condicional
    if ($hora >= 0 and $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 and $hora < 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }

    return $saudacao;
}

#():string; ():int; ():bool -> Especifica qual é o tipo de dado que a função deve retornar.
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{

    return $texto;
}
