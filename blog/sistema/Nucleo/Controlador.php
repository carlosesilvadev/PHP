<?php

namespace Sistema\Nucleo;

Use Sistema\Suporte\Template;

class Controlador{
    protected Template $template;

    public function __construct(string $diretorio){
        $this->template = new Template($diretorio);
    }
}