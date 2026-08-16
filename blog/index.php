<?php
#Arquivo de inicialização do Sistema

/*Determina usar tipos de dados especificados, evitando situações de conversão padrão do PHP por exemplo de número para string*/
//declare(strict_types = 1);
include 'sistema/configuracao.php';
require "Helpers.php";

#echo 'Publicado '.contarTempo('16-08-2026 11:37:23'); #3:15h -> 4 horas
#echo 'Publicado há '.contarTempo('16-08-2026 14:01:23'); #3:15 -> 1 hora
#echo 'Publicado há '.contarTempo('16-08-2026 15:16:23'); #3:16h -> agora
#echo 'Publicado há '.contarTempo('16-08-2026 15:06:23'); #3:17h -> 11 minutos
#echo 'Publicado há '.contarTempo('16-08-2026 15:47:23'); #3:48h -> 1 minuto
#echo 'Publicado há '.contarTempo('15-08-2026 14:49:23'); #16/08/2026 -> 1 dia
#echo 'Publicado há '.contarTempo('13-08-2026 14:49:23'); #16/08/2026 -> 3 dias
#echo 'Publicado há '.contarTempo('13-07-2026 14:49:23'); #16/08/2026 -> 1 mês
#echo 'Publicado há '.contarTempo('30-02-2026 15:57:23'); #16/08/2026 -> 6 meses
#echo 'Publicado há '.contarTempo('30-08-2025 15:57:23'); #16/08/2026 -> 1 ano
#echo 'Publicado há '.contarTempo('30-08-2022 15:57:23'); #16/08/2026 -> 4 anos
#echo 'Publicado há '.contarTempo('30-08-1922 15:57:23'); #16/08/2026 -> 1 seculo
echo 'Publicado há '.contarTempo('30-08-1722 15:57:23'); #16/08/2026 -> 3 seculos
