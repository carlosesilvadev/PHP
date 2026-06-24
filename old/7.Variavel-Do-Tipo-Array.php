<?php

/*
Array pode ser definido da seguinte forma:

$vet = array(1 => "Domingo", 2=> "Segunda", 3=> "Terça", 4=> "Quarta", "outro" => "Outro valor");*/

#Ou assim:
/*
$vet[1] = "Domingo";
$vet[2] = "Segunda";
$vet[3] = "Terça";
$vet[4] = "Quarta";
$vet["outro"] = "Outro valor";

print $vet[3];
echo "<br>";
print $vet[4];
echo "<br>";
print $vet["outro"];
echo "<br><br>";
#print $vet[5] - Não vai funcionar porque não tem indice 5;
*/
$matriz = array("dia" => array(1 => "Domingo", 2 => "Segunda", 3 => "Terça", 4 => "Quarta"), "mes" => array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Outro"), 15, 28);

print $matriz["dia"][2];
print " de ";
print $matriz["mes"][1];
print "<br>";
#Sem índice na matriz, o PHP organiza automaticamente o vetor/matriz a partir do índice 0.
print $matriz[1];
print "<br><br><br>";

$vet = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");

	#Exibe os valores do vetor.
	foreach ($vet as $vetor) {
		print "Hoje é: $vetor <br>";
	}

?>