<?php

/**
 * A cidade de São Paulo tem uma lei que restringe a circulação de carros numa determinada área
 * conhecida como "Centro Expandido". Com base no numero final da placa, o motorista sabe se
 * deve ou nao circular no horario proibido. Faca um programa que receba um numero inteiro
 * correspondente aos digitos da placa de um automóvel e verifique se é o dia de rodizio do carro ou
 * não. Considere que:
 * Carros com placa com final 1 ou 2: rodizio na segunda-feira
 * Carros com placa com final 3 ou 4 : rodizio na terca-feira
 * Carros com placa com final 5 ou 6 : rodizio na quarta-feira
 * Carros com placa com final 7 ou 8 : rodízio na quinta-feira
 * Carros com placa com final 9 ou 0 : rodízio na sexta-feira
 */

$ultimoDigitoDaPlaca = readline("Digite o último número da placa do carro: ");

$rodizio = match($ultimoDigitoDaPlaca){
    '1','2' => "Rodizio na Segunda-Feira",
    '3','4' => "Rodizio na Terça-Feira",
    '5','6' => "Rodizio na Quarta-Feira",
    '7','8' => "Rodizio na Quinta-Feira",
    '9','0' => "Rodizio na Sexta-Feira",
};

echo $rodizio;

/*
* Com o switch padrão encontrei inconsistência com a placa de final 0;
switch($ultimoDigitoDaPlaca){
    case ($ultimoDigitoDaPlaca == 1 || $ultimoDigitoDaPlaca == 2):
        echo "Rodizio na Segunda-Feira";
        break;
    case ($ultimoDigitoDaPlaca == 3 || $ultimoDigitoDaPlaca == 4):
        echo "Rodizio na Terça-Feira";
        break;
    case ($ultimoDigitoDaPlaca == 5 || $ultimoDigitoDaPlaca == 6):
        echo "Rodizio na Quarta-Feira";
        break;
    case ($ultimoDigitoDaPlaca == 7 || $ultimoDigitoDaPlaca == 8):
        echo "Rodizio na Quinta-Feira";
        break;
    case ($ultimoDigitoDaPlaca == 9 || $ultimoDigitoDaPlaca == 0):
        echo "Rodizio na Sexta-Feira";
        break;
    default:
        echo "Dígito inválido";
        break;
}

//var_dump($ultimoDigitoDaPlaca);
*/