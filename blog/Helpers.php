<?php

/**
 * Retornar a saudação específica de acordo com o horário atual do relógio
 * 
 * **ETAPAS:**
 * 1. **date_default_timezone_set():** - Seta o fuso horario para o de São Paulo
 * 2. **date('H'):** - Esta função retorna a hora atual
 * 3. **Match:** - Esta estrutura condicional vai avaliar de acordo com a variável $hora em qual correspondência(match) será executado
 * 
 * @var string $hora - Retorna a hora atual
 * @return string $saudacao - Retorna a string de saudação de acordo com o horário
 * @example **boa tarde**
 */
function saudacao(): string {
    #https://www.php.net/manual/pt_BR/function.date-default-timezone-get.php
    #TimeZone setada para evitar erro de timezone diferente daqui de São Paulo
    date_default_timezone_set('America/Sao_Paulo');

    #https://www.php.net/manual/pt_BR/function.date.php - Função date
    $hora = date('H');

    #Substituido && para AND na estrutura condicional
    /* if ($hora >= 0 and $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 and $hora < 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    } */

    /* switch($hora){
        case $hora >= 0 and $hora <=5:
            $saudacao = 'boa madrugada';
            break;
        case $hora >= 6 and $hora <= 12:
            $saudacao = 'boa dia';
            break;
        case $hora >= 13 and $hora < 18:
            $saudacao = 'boa tarde';
            break;
        default:
            $saudacao = 'boa noite';
    } */

    /* $saudacao = match($hora){
        '0','1','2','3','4','5' => 'bom dia',
        '6','7','8','9','10','11' => 'bom dia',
        '12','13','14','15','16','17' => 'boa tarde',
        default => 'boa noite'
    }; */

    $saudacao = match(true){
        ($hora >= 0 AND $hora <= 5) => 'boa madrugada',
        ($hora >= 6 AND $hora <= 11) => 'bom dia',
        ($hora >= 12 AND $hora <= 18) => 'boa tarde',
        default => 'boa noite'
    };

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
/**
 * Valida se o servidor atual é localhost ou está hospedado em um servidor externo
 * 
 * @return bool Retorna True/False se o nome do servidor encontrado na variável super global $_SERVER['SERVER_NAME'] for igual ou diferente de localhost
 * @example TRUE/FALSE
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com> 
 */
function localhost(): bool{
    #Comentei porque não estava funcionando
    #Mas depois de uns dias descobri que eram as extensões pra rodar php em tempo real que estava gerando resultado diferente do que foi apresentando no vídeo
    #var_dump(filter_input(INPUT_SERVER, 'SERVER_NAME'));

    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    
    if($servidor == "localhost"){
        return true;
    }

    return false;

    #Usei essa maneira para contornar o erro da extensão PHP Server
    /* $servidor = '';

    foreach($_SERVER as $item=>$valor){
        if($item == 'SERVER_NAME'){
            $servidor = $valor;
        }
    } 

    //Se o ambiente for localhost retorna true, caso contrário é o ambiente hospedado, então retorna false
    if($servidor == 'localhost'){
        return true;
    }

    return false; */
}

/**
 * Ajusta a url do ambiente dependendo de onde o ambiente está hospedado sendo Desenvolvimento para localhost ou Produção diferente disso
 * Além disso ajusta a url completa com a / antes da url indicada na chamada da função
 * 
 * @param string $url - Será passado para a função o nome da categoria que está sendo requisitada pelo usuário
 * @return string - Retorna a URL completa concatenada de acordo com as duas situações, se na chamada da função já possuir a / em $ambiente.$url ou se não for indicado a / na chamada da função em $ambiente."/".$url
 * @example - http://localhost/php/blog/admin OU https://carlosesilvadev.github.io/admin
 * 
 */
function url(string $url): string{
    $servidor = filter_input(INPUT_SERVER,'SERVER_NAME');

    $ambiente = (!$servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
    
    #Procura se na string possui o caractere /
    if(str_starts_with($url, '/')){
        return $ambiente.$url;
    }

    #Caso não tenha o caractere / então concatena o ambiente com a barra e url requisitada
    return $ambiente."/".$url;
}

/**
 * Formata a data atual de acordo com o padrão exibido no relógio do Windows
 * 
 * @var int $diaMes - Retorna o número do dia do Mês com a função date com o parâmetro 'd', dentro de [1-31]
 * @var int $diaSemana - Retorna o número do dia da semana com a função date com o parâmetro 'w', dentro de [0-6] De Domingo(Sunday):0 até Sábado(Saturday):6
 * @var int $mes - Retorna o número do mês atual e subtrai em -1, e como o retorno está dentro de [1-12] e o meu array $nomesDosMeses começa com indice 0, foi necessário fazer essa subtração, mas é possível ajustar isso indicando o indice para o meu array começando com 1
 * @var int $ano - Retorna o ano atual com date() e a passagem de parãmetro com 'Y', onde a representação é realizada com quatro dígitos como por exemplo: 2026
 * @var array $nomesDiasDaSemana - Retorna um array com os nomes da Semana, ou seja, ['domingo' - 'sábado']
 * @var array $nomesDosMeses - Retorna um array com os nomes dos meses, ou seja, ['janeiro' - 'dezembro']
 * @return string $dataFormatada - Retorna uma string formatada com o resultado igual ao apresentado quando coloca o mouse em cima do relógio do Windows
 * @example sexta-feira, 4 de setembro de 2026
 * 
 */
function dataAtual(): string{
    #quarta-feira, 2 de setembro de 2026 qua 2023(Hora Local)

    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n');
    $ano = date('Y');

    $nomesDiasDaSemana = ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado'];

    $nomesDosMeses = [
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro'
    ];

    $dataFormatada = $nomesDiasDaSemana[$diaSemana].", ".$diaMes." de ".$nomesDosMeses[$mes]." de ".$ano;

    return $dataFormatada;
}

/**
 * Gerar texto limpo para criar url amigavel, onde substitui acentos e caracteres especiais por letras
 * 
 * **ETAPAS:**
 * 1. **strtr():** Traduz os caracteres especiais e acentos da string que existe no $mapa['a'] e substitui por letras e espaço em branco que tem no $mapa['b'].
 * 2. **strip_tags() e trim():** Remove os espaçoes em branco antes e depois da string e também remove as tags HTML ou PHP
 * 3. **str_replace():** Substitui os espaços em branco por hífen '-' e depois remove os excessos de hifen por um único hífen.
 * 4. **strtolower():** Transforma toda a string que possua caractere em maiúsculo para minúsculo
 * 
 * @param string $string -> Parâmetro que a função utilizará como base para converter o texto
 * @var array $mapa['a'] -> Lista de caracteres especiais que serão utilizados como base de busca para procurar e encontrar no parâmetro passado para a função - Origem
 * @var array $mapa['b'] -> Lista de caracteres que substituirá os caracteres especiais - Destino
 * @return string $slug - Retorna a string formatada sem acentos ou caracteres especiais e hífen no lugar do espaço entre as palavras.
 * @example **DE:** Avatar 2: O Caminho da Água | **PARA:** avatar-2-o-caminho-da-agua
 * 
 */
function slug(string $string): string{
    
    $mapa['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏĐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûa@#$%&*()-+={[}]/\?"!¨|;:.,\\\'<>°ºª ';

    $mapa['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuua                                    ';
    
    #$slug = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);
    $slug = strtr(mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8'), mb_convert_encoding($mapa['a'], 'ISO-8859-1', 'UTF-8'), $mapa['b']);

    $slug = strip_tags(trim($slug));

    $slug = str_replace(' ', '-', $slug);

    $slug = str_replace(['------','-----','----','---','--'], '-', $slug);

    $slug = strtolower($slug);

    #return utf8_decode($string); #opção para descobrir algum caractere que não foi indicado no mapa['a']
    return $slug;
}

/**
 * Validar o cpf se é valido ou não
 * 
 * @param string $cpf - Parâmetro utilizado para calcular se o CPF é válido
 * @var bool $validade - Variável que irá retornar da função indicando a validade do CPF
 * @var string $cpfSemPonto - A função slug() irá tratar a string do CPF realizando a limpeza dos pontos se houver ou qualquer caractere especial, mantendo somente o hífen
 * @var string $cpfLimpo - A função str_replace() irá substituir todos os caracteres de hífen para vazio, assim a string do cpf não irá conter nenhum caractere especial
 * @var bool $cpfSemLetra - Se preg_match() retornar true isso quer dizer que a string não tem letras, somente números de 0 à 9 e tem exatamente 11 dígitos, se retornar false é porque tem letra ou menos ou mais de 11 dígitos o que torna um cpf inválido
 * @see fonte: https://www.macoratti.net/alg_cpf.htm
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 * @return bool $validade - Se o cálculo da função resultar em qualquer inconsistência que indique que o CPF não é valido irá retornar false e true caso contrário
 */
function validaCPF(string $cpf):bool{
    $validade = false;
    $somaDigitosA = 0;
    $multiplicadorA = 10;
    $somaDigitosB = 0;
    $multiplicadorB = 11;

    $cpfSemPonto = slug($cpf);

    $cpfLimpo = str_replace('-', '', $cpfSemPonto);

    #Retorna 1 se no padrão regex os caracteres do cpf são somente algarismos de 0 até 9 e se possui exatamente 11 dígitos
    $cpfSemLetra = preg_match("/^[0-9]{11}$/", $cpfLimpo);

    if($cpfSemLetra){        
        #Calculo do Primeiro Digito Verificador:
        for($contadorA=0;$contadorA < 9;$contadorA++){
            $somaDigitosA += $cpfLimpo[$contadorA]*$multiplicadorA--;
        }

        $restoDasSomasA = $somaDigitosA%11;

        $primeiroDigitoVerificador = ($restoDasSomasA < 2 ? 0 : 11-$restoDasSomasA);

        $validade = ($cpfLimpo[9] == $primeiroDigitoVerificador ? $cpfLimpo[9] = $primeiroDigitoVerificador : false);

        #Calculo do Segundo Digito Verificador:
        for($contadorB=0;$contadorB < 10;$contadorB++){
            $somaDigitosB += $cpfLimpo[$contadorB]*$multiplicadorB--;
        }

        $restoDasSomasB = $somaDigitosB%11;

        $segundoDigitoVerificador = ($restoDasSomasB < 2 ? 0 : 11-$restoDasSomasB);

        $validade = ($cpfLimpo[10] == $segundoDigitoVerificador ? $cpfLimpo[10] = $segundoDigitoVerificador : false);

    }
    
    return $validade;
}

/**
 * Validar CPF com algoritmo encontrado na internet
 * @param string $cpf - String com o cpf informado pelo usuário
 * @var string $cpf - Recebe o parâmetro $cpf, mas após a execução da função limparCPF() que realiza a remoção dos caracteres especiais ou letras do cpf se houver
 * ***ETAPAS*
 * 1. If verifica se a string possui menos ou mais de 11 caracteres e preg_match() com o regex verifica se os números são repetidos tipo 11122233344
 * 2. Depois o algoritmo encontrado na internet faz os calculos para validar os digitos verificadores do CPF e coloquei um echo para acompanhar as variáveis ao longo da execução
 * @return bool - Retorna TRUE/FALSE se o CPF for válido ou não for válido
 * @example $cpf = 111.222.333-44 | Retorno bool(false)
 * @author Carlos Eduardo Silva <carlos.eduardo-silva@hotmail.com>
 */
function validarCpf(string $cpf): bool{
    $cpf = limparCPF($cpf);

    if(mb_strlen($cpf) != 11 OR preg_match("/(\d)\1{10}/", $cpf)){
        return false;
    }

    for($t = 9; $t < 11; $t++){
        echo "\$t = $t ";
        for($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf[$c] * (($t+1)-$c);
            echo "\$d = $d | \$c = $c | \$d += \$cpf[\$c] * ((\$t+1)-\$c) = $d<hr>";
        }

        $d = ((10*$d) % 11) % 10;
        
        echo "\$d = ((10*\$d) % 11) % 10 = $d<hr>";
        
        if($cpf[$c] != $d){
            return false;
        }
        echo ($cpf[$c] != $d ? "{$cpf[$c]} É diferente de $d<br>" : "{$cpf[$c]} É igual de $d<br>");
    }

    return true;
}

function limparCPF(string $numero): string{
    return preg_replace("/[^0-9]/","",$numero);
}