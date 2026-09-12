<?php

class Mensagem {
    /*public $texto = 'mensagem de teste.';*/
    /*protected $texto;*/
    /**Não é possível acessar atributo private fora desta classe */
    private $texto;
    private $css;

    public function renderizar():string{
        return $this->texto = $this->filtrar('<h1>mensagem de teste');
    }

    private function filtrar(string $mensagem): string{
        #Filtro que evita que um usuário insira um código html na página e afete a estrutura do site.
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }

}