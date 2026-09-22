<?php

namespace Sistema\Controlador;

use Override;
Use Sistema\Nucleo\Controlador;

class SiteControlador extends Controlador{

    public function __construct()
    {
        return parent::__construct('templates/site/views');
    }

    public function index(): void{
        echo $this->template->renderizar("index.html", [
            'titulo' => 'teste de titulo',
            'subtitulo' => 'teste de subtitulo'
            ]);
    }


    public function sobre(): void{
        echo 'página sobre';
    }
}