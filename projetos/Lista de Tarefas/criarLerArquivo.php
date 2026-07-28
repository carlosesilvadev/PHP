<?php

$nomeDoArquivo = "meuArquivo.txt";

$conteudoDoArquivo = "Esta string contem as informações que serão gravadas no arquivo.";

file_put_contents($nomeDoArquivo, $conteudoDoArquivo);

/**Criar arquivo da maneira tradicional com fopen/fwrite e fclose */

$meuArquivo = "console.log";

$conteudoDoLog = "Aqui será registrado o conteúdo do arquivo do console.log";

$arquivo = fopen($meuArquivo, "w");

fwrite($arquivo, $conteudoDoLog);

fclose($arquivo);