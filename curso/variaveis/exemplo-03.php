<?php
//tipo de dados basico 
$nome = "josimar";
$site = 'infotecnico';

$ano = 1990;
$salario = 5500.90;
$bloqueado = false;

//************************************//
//tipo de dados composto
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

//tipo de dados reservado
$nascimento = new DateTime();

//var_dump($nascimento);


//************************************//

$arquivo = fopen("exemplo-03.php", "r");
//var_dump("$arquivo");

$nulo = NULL; // nao existe nenhum dado
$vazio = ""; //ja foi reservado na memoria
?>