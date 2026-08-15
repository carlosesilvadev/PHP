<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

$texto = 'Texto para resumir';

/* #Função para contar os caracteres da string e para remover espaço em branco.
echo $total = mb_strlen(trim($texto));
echo "<br>";

#Função para determinar o intervalo de inicio e fim de exibição da string, contando a partir de 0
echo $resumo = mb_substr($texto, 1, 3);
echo '<br>';

#Retorna o indice da ultima ocorrência do caractere dentro da string 
echo $ocorrencia = mb_strrpos($texto, 'e'); */

echo $resumirTexto = mb_substr($texto, 0, mb_strrpos(mb_substr($texto, 0, 10), ''));
echo "...";

echo "<hr>";

echo '<pre>mb_substr - "Texto para resumir" de 0: T até 10:" "</pre><h1>';
print (mb_substr($texto, 0, 10));

echo "</h1><hr>";
echo '<pre>mb_strrpos - "Texto para resumir" retorna 10 que é o indice do ultimo caractere no final da string.</pre><h1>';
print (mb_strrpos(mb_substr($texto, 0, 10), ''));

echo "</h1><hr>";
echo '<pre>mb_substr - "Texto para resumir" retorna a string resumida, que é o resultado do conjunto de funções anteriores.</pre><h1>';
print (mb_substr($texto, 0, mb_strrpos(mb_substr($texto, 0, 10), ' ')));
echo "</h1><hr>";

echo resumirTexto($texto, 2);
echo "</h1><hr>";

echo cortarTexto($texto, 15);