<?php
$arquivo = "tarefas.json";
criarTarefa($arquivo, "Nova Tarefa");

function criarTarefa($arquivo, $desc){
    if(file_exists($arquivo)){
        $test = file_get_contents($arquivo);
        echo $test;
    }else{
        echo "Arquivo não encontrado, portanto será criado um novo arquivo.\n";

        $tarefaJson = json_encode($desc);

        file_put_contents($arquivo, $tarefaJson);
    }
}