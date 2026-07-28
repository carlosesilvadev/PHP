<?php

$dadosFormulario = [
    'nome' => '   Carlos Eduardo Silva   ',
    'email' => 'carlos..eduardo@@live,com',
    'idade' => '32 anos',
    'cpf' => '427.586.838-22',
    'senha' => '123',
    'cupom_desconto' => NULL,
    'busca_cliente' => "1; DROP TABLE clientes;--"
];

$resultado = validarCadastro($dadosFormulario);

foreach($resultado['erros'] as $res){
    echo("$res\n");
}


function validarCadastro($dados){

$erros = [];

    foreach($dados as $key => $value){

        switch($key){

            /*- Remove espaços em branco desnecessários do nome com a função trim
            e aqui eu coloquei para comparar o valor do nome com o resultado do retorno da função trim, para saber se há espaços no início ou no final do nome*/
            case 'nome' : 
                if($value != trim($value)){
                    $erros[] = "Nome com espaços inválidos\nNome: $value";
                }
                break;

            case 'email' : 

                //- Valida se o e-mail é um endereço válido com a função filter_var($var, FILTER_VALIDADE_EMAIL)
                if(filter_var($value, FILTER_VALIDATE_EMAIL) === false){
                    $erros[] = "Email inválido : $value\n";
                }
                break;
            
            case 'idade':
                //Remove tudo o que for string diferente dos números de 0 à 9 por vazio e converte para inteiro.
                $idade = intval(preg_replace('/[^0-9]/', '', $value));
                //Se não houver número na idade do usuário vai retornar 0 na conversão da string para inteiro
                if($idade <= 0 || $idade > 120){
                    $erros[] = "Idade informada no formato inválido\nAntes: $value\nDepois: $idade\n";
                }
            
                break;

            case 'senha':
                
                //Verifica se a senha tem no mínimo 8 caracteres, 1 número e 1 letra maiúscula, com a negação de preg_match das expressões regulares                
                if(strlen($value) < 8 || !preg_match('/[A-Z]/', $value) || !preg_match('/[0-9]/', $value)){
                    $erros[] = "Senha inválida: $value\n";
                }

                break;
            
            case 'cupom_desconto':

                /*Se cupom_desconto for null, deve ser tratado sem gerar warning/erro — pesquise o operador específico do PHP para isso
            (não é um if comum, existe um operador dedicado para "isso é null? usa default").*/
                $cupom = $value;
                $value ??= "Cupom não informado pelo usuário\n";

                if($cupom === NULL){$erros[] = $value;}
                break;
            
            case 'cpf':
                break;

            //Retorna um array com dois índices: 'valido' => true/false e 'erros' => [] (lista de mensagens de erro encontradas).
            default :
                break;
        }
    }
    
    return [
        'valido' => empty($erros),
        'erros' => $erros
    ];
}

$pdo = new PDO('mysql:host=localhost;dbname=meubanco', 'usuario', 'senha');

buscarClientePorNome($pdo, $dadosFormulario['busca_cliente']);

function buscarClientePorNome(PDO $pdo, string $nome): array {
    $sth = $pdo->prepare('SELECT * FROM clientes WHERE nome = ?');
    $sth->execute(["$nome"]);
    return $sth->fetchAll();
}