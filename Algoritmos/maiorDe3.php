<?php
/**
 * Verificar qual é o maior de três números digitados
 */

$numeros = [];

for($i=1;$i<=3;$i++){
    $numeros[] = readline("Digite um número: ");
}

if($numeros[0] >= $numeros[1] && $numeros[0] >= $numeros[2]){
    echo "Maior número: $numeros[0]";

} elseif($numeros[1] >= $numeros[0] && $numeros[1] >= $numeros[2]){
    echo "Maior número: $numeros[1]";

}else{
    echo "Maior número: $numeros[2]";
}