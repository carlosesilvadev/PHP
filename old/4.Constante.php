<?php

#Exemplo de uma constante
#define(name, value);

#constant() -> retorna o valor da constante
#get_defined_constants() -> retorna a lista de todas as constantes
#defined() -> retorna se uma constante foi definida

define("nome", "Jailton", true);
#Caso queira que a constante não seja case sensitive, então é só colocar true na frente do valor da constante.
define("idade", 30);
$teste = "teste";


echo "carloseduardo.site11.com <br><br>";
echo "Seu nome é: ".NoMe;
echo "<br>";
echo "Sua idade é: ".idade;
echo "<br>";
echo "Variavel é: ".$teste;
echo "<br>";
#Outra forma de exibir algo além do echo, seria o print e o print_r
print "Variável é: ".$teste;
echo "<br>";
echo "<br>";
#print_r(get_defined_constants());

if(defined("nomfe")) {
	print "O nome foi definido e é: ".nome;
} else {
	print "O nome não foi definido!";
}

?>