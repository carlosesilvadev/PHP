<?php

for($i=1;$i<=10;$i++){
    print "$i<br>";
}

$idade = 32;

if($idade >= 18){
    print "Maior de idade<br>";
}else{
    echo "Menor de idade<br>";
}

$lista = [1,2,3,4,5,6,7,8,9,10];

shuffle($lista);

//var_dump($lista);

foreach($lista as $value){
    echo "$value ";
}

?>