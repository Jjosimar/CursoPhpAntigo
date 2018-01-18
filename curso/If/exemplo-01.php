<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor){

    echo "Adulto";

}else{
    echo "Idoso";
}

//condição simples e rapida
echo "</br>";
// "?" significa entao  ":" senao
echo ($qualASuaIdade < $idadeMaior)? "menor de idade":"Maior de idade";
?>