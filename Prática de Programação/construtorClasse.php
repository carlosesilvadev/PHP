<?php

readonly class Produto{
    public function __construct(
        public string $nome,
        public float $preco,
        public int $quantidade
    ){}
}

$item = new Produto("Camisa", 49.50, 15);

echo $item->preco;

readonly class Agenda{
    public function __construct(
        public string $nome,
        public int $idade,
        public int $telefone
    ){}
}

$contato = new Agenda("Carlos Eduardo", 32, 11992670407);

echo "\nIdade: ".$contato->idade;

readonly class Perfil{
    public function __construct(
        public string $nome,
        public int $idade,
        public string $telefone
    ){}
}

$novoPerfil = new Perfil("Carlos Eduardo Silva", 32, "+5511992670407");

foreach($novoPerfil as $dados){
    echo $dados;
}

readonly class Passagem{
    public function __construct(
        public int $numeroPassagem,
        public string $cidadeOrigem,
        public string $dataEmbarque,
        public string $assento,
        public float $valor,
        public string $empresa,
        public string $cidadeDestino,
        public string $horaEmbarque,
        public int $distancia
    ){}
}

$bilhete = new Passagem(238754,"São José do Rio Preto","2026-07-02","D42",88.75,"Ultra Ltda.","São Paulo","22:30",572);

foreach($bilhete as $dados){
    echo $dados."\n";
}