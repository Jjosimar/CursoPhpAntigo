<?php

    function ola($texto, $periodo="Bom dia"){
        
        return "ola $texto, $periodo <br>";
        
    }

    echo ola("mundo");
    echo ola("");
    echo ola("josimar", "Boa noite");
    echo ola("mari0", "");


    ///parametros  que nao possui valor padrao colocar a esquerda e os que possui colocar mais a esquerda
?>
