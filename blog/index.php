<link rel="stylesheet" href="estilo.css">
<?php

include_once 'vendor/autoload.php';

$document = new \Bissolli\ValidadorCpfCnpj\CPF('111111111111');

#var_dump($document);

var_dump($document->isValid());