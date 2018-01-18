<?php

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //ignora os valores nullos  o sinal "??"

//agora se colocar um numero antes do c ou do b ele ignora o proximo e so imprime o primeiro  numero que aparecer.


?>