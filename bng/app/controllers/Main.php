<?php

namespace bng\Controllers;
use bng\Controllers\BaseController; 

class Main extends BaseController{
    public function index(){
        $this->view();
    }

    public function teste(){
        echo "Você entrou no método teste";
    }
}