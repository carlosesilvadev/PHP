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
function resumirTexto(string $texto, int $limite, string $continue = '...'): string {
    $textoLimpo = trim($texto);

    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, $limite), ''));

    return $resumirTexto.$continue;
}

/**
 * Corta a frase e adiciona reticencias no final
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 * @param string $texto Frase que será cortada
 * @param int $limite Número que indica o limite de caracteres
 * @param string $etc Simbolo que irá representar a quebra do texto, default '...'
 * 
 * @return string Retona a string do início até o limite de caracteres concatenado com reticencias
 * @example $texto = "<h3>Texto</h3> <b>para</b> resumir"
 * @example cortarTexto($texto, 15);
 * @example "Texto para resu..."
 */
function cortarTexto(string $texto, int $limite, string $etc = '...'): string{
    #Função Trim remove os espaços em branco que possam existir no inicio ou no final do texto
    #Função strip_tags remove as tags html se existir na string
    $textoSemEspacoLateral = trim(strip_tags($texto));

    #Se o tamanho do texto for menor ou igual ao limite estipulado então sai da função retornando o texto completo.
    if(mb_strlen($textoSemEspacoLateral) <= $limite){
        return $textoSemEspacoLateral;
    } else {
        #Se o tamanho do texto for maior que o limite estipulado então vai exibir o texto apartir do indice 0, ou seja, a primeira letra texto até o indice do limite estipulado e concatena com as reticencias.
        return mb_substr($textoSemEspacoLateral, 0, $limite).$etc;
    }
}