<?php

$nome; $sobrenome; $mensagem;

printf("Digite o primeiro nome: ");
$nome = readline();

print("Digite o sobrenome: ");
$sobrenome = readline();

$mensagem = "Nome completo =";

echo $mensagem." ". $nome . " ". $sobrenome;