<?php

$a = 10; //vaiavel é uma coisa e parametro é outra
//nao alterao o valor da variavel
/*function trocaValor($a){

    $a += 50;
    return $a;
}*/

//quando tem o & na frente do parametro - passagem de parametro por referencia
//qndo executa na função mudara tambem o valor na variavel
function trocaValor(&$a){
    
        $a += 50;
        return $a;
 }

echo trocavalor($a);
echo "<br>";
//echo trocavalor($a);
//echo "<br>";
echo $a;

?>