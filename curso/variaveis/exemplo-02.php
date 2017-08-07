<?php

$anoNascimento = 1990;
$nome1 = "joao";
$sobrenome = "carlos";

//concatenação
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto; 

exit;

echo $nome1;
//apagar variavel
echo "<br/>";
//unset($nome1);


//se existe
if(isset($nome1)){
    echo $nome1;
}


?>