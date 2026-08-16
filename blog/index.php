<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

#Retorna a data e hora atual de acordo com os diversos parâmetros padrões da função date
# d - Day - Dia
# m - Mounth - Mês
# Y - Year - Ano
# H - Hour - Hora
# i - Minutes - Minutos
# s - Seconds - Segundos
# Além disso foi setado a TimeZone de São Paulo no arquivo /sistema/configuracao.php
echo date('d/m/Y-H:i:s');