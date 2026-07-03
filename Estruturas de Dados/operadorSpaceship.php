<?php

$a = 1;
$b = 10;

var_dump((bool) ($a<=>$b)); // 1 e 10 = -1 | TRUE
var_dump((bool) ($a<=>$b)); // 10 e 1 = 1 | TRUE
var_dump((bool) ($a<=>$b)); // 1 e 1 = 0 | FALSE