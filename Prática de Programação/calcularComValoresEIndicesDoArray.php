<?php

$vetor = array(12,6,9,5,14,8,33,54,35);
$contador = 0;

$x = 2; $y = 3;

foreach($vetor as $numero){
    echo "Índice $contador: $numero\t";
    $contador++;
}

printf ("\nVetor[$x] : ".$vetor[$x]."\n");
printf ("Vetor[".($x+1)."] : ".($vetor[$x+1])."\n");
printf ("Vetor[".($x*2)."] : ".($vetor[$x*2])."\n");
printf ("Vetor[".($x+$y)."] : ".($vetor[$x+$y])."\n");
printf ("Vetor[".($x*$y+2)."] : ".($vetor[$x*$y+2])."\n");
printf ("Vetor[vetor[$x - 1]+1] = 7 : ".$vetor[$vetor[$x-1]+1]."\n");
printf ("Vetor[vetor[$x + 1]] = 5 : ".$vetor[$vetor[$x+1]]."\n");
printf ("Vetor[vetor[$x + 1] - ($y + 1)] = 1 : ".$vetor[$vetor[$x+1] - ($y + 1)]."\n");
printf ("Vetor[vetor[$y + 1] - vetor[2+$y] = 6 : ".$vetor[$vetor[$y+1] - $vetor[2+$y]]."\n");
printf ("Vetor[vetor[$x * $y + 1] %% vetor[$y - $x] = 0 : ".$vetor[$vetor[$x*$y+1] % $vetor[$y-$x]]."\n");