<?php

/**
 * Programa que tenha uma constante armazenando um dado caractere que representa uma
 * senha de acesso a um sistema. O programa deverá ler um dado caractere correspondente a uma
 * senha e comparar com o valor da constante. Se a senha estiver correta imprimir "Acesso liberado";
 * caso contrário, solicitar novamente a digitação da senha, mas possibilitando apenas três tentativas.
 */

$erros = 3;
$senhaGravada = '123456';

while($erros > 0){
    $senhaUsuario = readline("Digite a sua senha: ");
    
    if($senhaUsuario != $senhaGravada){
        $erros--;
        if($erros == 0){
            echo "Você atingiu o limite de 3 tentativas";
        }
    } else {
        echo "Acesso Liberado";
        $erros = -1;
    } 
}