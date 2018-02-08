<?php

spl_autoload_register(function($nameClass){

    var_dump($nameClass);

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass. ".php";

    //require_once($filename);
    if(file_exists($filename)){
        require_once($filename);
    }
});

//tudo que for na pasta raiz sao as classes generica, as subpastas obrigatoriamente tem o namepace e sao assuntos mais especificos.
?>