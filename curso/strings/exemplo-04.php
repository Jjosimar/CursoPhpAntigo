<?php

$frase = "A repetição é mae da retenção";

//$q = strpos($frase, "mae"); //ate chegar a palavra mae
//var_dump($q);
$palavra = "mae";
$q = strpos($frase, $palavra);
$texto = substr($frase, 0 , $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
var_dump($texto2);

//str de string e len de contar o tamanho
?>