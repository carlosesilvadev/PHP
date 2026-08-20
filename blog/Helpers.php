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
 * 
 * @param string $texto Frase que será cortada
 * @param int $limite Número que indica o limite de caracteres
 * @param string $etc Simbolo que irá representar a quebra do texto com valor default '...', mas pode ser '...Ler mais' ou '<a href="">...'
 * 
 * @return string Retona a string do início até o limite de caracteres concatenado com reticencias
 * 
 * @example "Texto para resu..."
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
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

/**
 * Converte número para real e condicional se o valor não for nulo retorna o proprio numero em real, agora se for nulo então vai retornar R$10,00 reais
 * @param ?float $valor Número que será convertido para Real
 * @return string Número convertido para BRL
 * @example R$ 22,00
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function formatarValor(?float $valor = null): string{
    #Concatena a string 'R$' com o resultado da função padrão do PHP number_format com uma condicional se a variável de valor possui registro
    #Onde na condição verifica se o valor existir então retorna ele próprio, caso contrário vai retornar o valor default 10 com o separador de 2 casas decimais com vírgula.
    return "R$ ".number_format(($valor ? $valor : 10), 2, ',', '.');
}

/**
 * Converte número para inteiro, sem casa decimal e retorna 0 se for nulo
 * @param ?float $numero Valor que será formatado
 * @return string Número formatado com ponto nas casas dos milhares
 * @example 50.000.000
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function formatarNumero(?float $numero = null): string {
    #Formata o número com a condicional se o número for válido então retorna ele próprio formatado sem casa decimal e com ponto na casa dos milhares ou 0 se for nulo.
    return number_format(($numero ?: 0), 0, '.', '.');
}

/**
 * Contador do tempo que já se passou deste que o conteudo foi postado.
 * @param string $data Data da postagem no formato dia-mês-Ano Hora-minuto-segundo
 * @return string Retorna o tempo que já passou desde que houve a publicação até agora
 * @example Publicado há 3 seculos
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function contarTempo(string $data){
    echo "Agora: ".$agora = strtotime(date('d-m-Y H:i:s'));
    echo "<br>";
    echo "Publicou em: ".$tempo = strtotime($data);
    echo "<br>";
    echo "Tempo que já passou: ".$diferenca = $agora-$tempo;
    echo "<br>";
    echo "Segundos: ".$segundos = $diferenca;
    echo "<br>";
    echo "Minutos: ".$minutos = round($diferenca/60);
    echo "<br>";
    echo "Horas: ".$horas = round($diferenca/3600);
    echo "<br>Dias: ".$dias = round($diferenca/86400);
    echo "<br>Semanas: ".$semanas = round($diferenca/604800);
    echo "<br>Meses: ".$meses = round($diferenca/2419200);
    echo "<br>Anos: ".$anos = round($diferenca/29030400);
    echo "<br>Seculos: ".$seculos = round($diferenca/2903040000);

    echo "<hr>";
    var_dump('Parametro: '.$data.'<br>', 'tempo: '.$tempo."<br>", 'agora: '.$agora);
    echo "<hr>";
 
    if($segundos <= 60){
        return 'agora';
    }elseif($minutos <= 60){
        return $minutos == 1 ? '1 minuto' : $minutos.' minutos';
    }elseif($horas < 24){
        return $horas == 1 ? '1 hora' : $horas.' horas';
    }elseif($dias <= 7){
        return $dias == 1 ? '1 dia' : $dias.' dias';
    }elseif($semanas <= 4){
        return $semanas == 1 ? '1 semana' : $semanas.' semanas';
    }elseif($meses <= 12){
        return $meses == 1 ? '1 mês' : $meses.' meses';
    }elseif($anos <= 100){
        return $anos == 1 ? '1 ano' : $anos.' anos';
    }elseif($seculos <= 1000){
        return $seculos == 1 ? '1 seculo' : $seculos.' seculos';
    }
}

/**
 * Validação de email com o filtro padrão de email do PHP FILTER_VALIDATE_EMAIL
 * 
 * @param string $email texto que será validado se é um e-mail válido
 * @return bool Retorna um valor booleano de acordo com a validação realizada na string recebida como parâmetro
 * @example TRUE/FALSE
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Validação de URL com uma validação própria
 * 
 * @param string $url texto que será validado se é uma URL válida
 * @return bool Retorna um valor booleano de acordo com a validação realizada na string recebida como parâmetro
 * @example TRUE/FALSE
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function validarUrl(string $url): bool{
    if(strlen($url) < 10){
        return false;
    }

    if(!str_contains($url, '.')){
        return false;
    }

    if(str_contains($url, 'http://') OR str_contains($url, 'https://')){
        return true;
    }

    return false;
}

/**
 * Validação de URL com o filtro padrão do PHP FILTER_VALIDATE_URL
 * 
 * @param string $url texto que será validado se é uma URL válida
 * @return bool Retorna um valor booleano de acordo com a validação realizada na string recebida como parâmetro
 * @example TRUE/FALSE
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function validarUrlComFiltro(string $url): bool{
    return filter_var($url, FILTER_VALIDATE_URL);
}

function localhost(): bool{
    #Comentei porque não estava funcionando
    #$servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    $servidor = '';

    foreach($_SERVER as $item=>$valor){
        if($item == 'SERVER_NAME'){
            $servidor = $valor;
        }
    } 

    //Se o ambiente for localhost retorna true, caso contrário é o ambiente hospedado, então retorna false
    if($servidor == 'localhost'){
        return true;
    }

    return false;
}