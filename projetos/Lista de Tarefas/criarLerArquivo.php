<?php

$arquivo = "meuArquivo.txt";

$conteudoDoArquivo = file_get_contents($arquivo);

echo $conteudoDoArquivo;