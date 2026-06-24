<?php

$a = "7";

/*
	if ($a == 1)
		print "Valor igual a 1 <br>";
	elseif ($a == 2)
		print "Valor igual a 2 <br>";
	elseif ($a == 3)
		print "Valor igual a 3 <br>";
	elseif ($a == 4)
		print "Valor igual a 4 <br>";
	elseif ($a == 5)
		print "Valor igual a 5 <br>";
	elseif ($a == 6)
		print "Valor igual a 6 <br>";
	else
		print "Outro valor <br>";
*/


	switch($a) {
		case "1" : print "Valor igual a 1 <br>";
					break;
		case "2" : print "Valor igual a 2 <br>";
					break;
		case "3" : print "Valor igual a 3 <br>";
					break;
		case "4" : print "Valor igual a 4 <br>";
					break;
		case "5" : print "Valor igual a 5 <br>";
					break;
		case "6" : print "Valor igual a 6 <br>";
					break;
		default: print "O valor da variavel \$a é diferente das opções disponíveis!";
	}
?>