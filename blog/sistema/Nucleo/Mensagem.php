<?php
/**
 * Classe responsável para exibir a mensagem do usuário
 * @author Carlos Eduardo Silva | carlos.eduardo-silva@hotmail.com
 * 
 */
class Mensagem {
    /*public $texto = 'mensagem de teste.';*/
    /*protected $texto;*/
    /**Não é possível acessar atributo private fora desta classe */
    private $texto;
    private $css;

    public function sucesso($mensagem): Mensagem{
        $this->css = 'alert alert-primary';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    public function erro($mensagem): Mensagem{
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    public function alerta($mensagem): Mensagem{
        $this->css = 'alert alert-warning';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    public function informa($mensagem): Mensagem{
        $this->css = 'alert alert-info';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    public function renderizar(): string{
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $mensagem): string{
        #Filtro que evita que um usuário insira um código html na página e afete a estrutura do site.
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }

}