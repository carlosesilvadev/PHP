<?php

/**
 * Faça um programa que verifique qual a estação climática correspondente a um mes fornecido. O
 * programa deve imprimir a estacao: primavera, verão, outono ou inverno, considerando que são
 * estações no Hemisferio Sul, conforme dados abaixo:
 * Primavera: setembro/outubro/novembro
 * Verão: dezembro/janeiro/fevereiro
 * Outono: março/abril/maio
 * Inverno: junho/julho/agosto
 */

$mes = readline("Informe um mês do ano: ");

switch($mes){
    case ($mes === 'setembro' || $mes === 'outubro' || $mes === 'novembro'):
        echo "Estação: Primavera";
        break;
    case ($mes === 'dezembro' || $mes === 'janeiro' || $mes === 'fevereiro'):
        echo "Estação: Verão";
        break;
    case ($mes === 'março' || $mes === 'abril' || $mes === 'maio'):
        echo "Estação: Outono";
        break;
    case ($mes === 'junho' || $mes === 'julho' || $mes === 'agosto'):
        echo "Estação: Inverno";
        break;
    default:
        echo "Mês inválido!";
}