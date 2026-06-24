<?php

#Variável de variável
echo "Criação das variáveis: <br>";

$a = "manoel";
$$a = "jailton";

echo "<br><br>";

echo "Variável de variável:";

echo "<br><br>";

#exibe o valor da variável a
echo $a;
echo "<br>";

#exibe o valor da variável a que está dentro de a
echo "${$a}";
echo "<br>";

#também exibe o valor da variável a que está dentro de a, mas agora referenciando pelo valor inicial da variável
echo "$manoel";

?>