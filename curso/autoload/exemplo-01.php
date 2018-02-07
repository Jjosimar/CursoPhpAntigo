<?php

function __autoload($nomeClasse){
   // var_dump($nomeClasse);
    require_once "$nomeClasse.php";
}

$carro = new Delray();
$carro->acelerar(80);
?>