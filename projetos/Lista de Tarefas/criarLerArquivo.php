<?php

$array = [
    'nome' => 'Carlos',
    'Idade' => '32',
    'Sexo' => 'M'
    ];

$meuJson = json_encode($array);

echo "$meuJson\n";

$herois = [
        "squadName" => "Grupo de Super Heróis",
        "homeTown" => "São Paulo",
        "membros" => [
            "nome" => "Homem Molecula",
            "idade" => 29
        ],
];

//JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK -> Utilizar para corrigir caracteres especiais.
$heroisJson = json_encode($herois, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);

echo "$heroisJson\n";

//Gerando o arquivo JSON
file_put_contents("herois.json", $heroisJson, FILE_APPEND);

//Lendo o arquivo JSON que foi gerado
$heroisDoArquivo = file_get_contents("herois.json");

echo $heroisDoArquivo;