<?php

namespace bng\Controllers;

class Main{
    public function index($id = null){
        echo "Estou dentro do controlador Main - index";
        echo "<br>";
        echo "O id indicado foi $id";

        //Pode chamar qualquer função da pasta app/helpers/Functions.php, depois de incluir o arquivo em composer.json
    }

    public function teste(){
        echo "Você entrou no método teste";
    }
}