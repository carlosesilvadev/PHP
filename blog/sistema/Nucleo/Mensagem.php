<?php

class Mensagem{

    private string $texto;
    private string $css;

    private function filtrarTexto(string $txt){
        return filter_var(strip_tags($txt), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    public function alertaErro(string $msg): Mensagem{
        $this->texto = $this->filtrarTexto($msg);
        $this->css = 'alert alert-danger';
        return $this;
    }

    public function alertaSucesso(string $msg): Mensagem{
        $this->texto = $this->filtrarTexto($msg);
        $this->css = 'alert alert-success';
        return $this;
    }

    public function alertaInformacao(string $msg): Mensagem{
        $this->texto = $this->filtrarTexto($msg);
        $this->css = 'alert alert-info';
        return $this;
    }

    public function alertaAviso(string $msg): Mensagem{
        $this->texto = $this->filtrarTexto($msg);
        $this->css = 'alert alert-warning';
        return $this;
    }

    public function renderizar(): string{
        return "<h6 class='{$this->css}'>{$this->texto}</h6>";
    }

    public function __toString(){
        return $this->renderizar();
    }
}