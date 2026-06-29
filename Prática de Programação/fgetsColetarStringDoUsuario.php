<?php

echo "Digite uma palavra: ";

//Observação: A tecla enter pressionada ao final da digitação da palavra é representado pelo caractere \0 que determina a quebra de linha ou final da string.
//Pode utilizar a função trim($variavel) para remover este ultimo caractere especial.
$palavra = fgets(STDIN);

printf("A palavra digitada foi: $palavra.");