<?php
//ARQUIVOS EM OUTRA PASTA
function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php")===true){
        require_once($nomeClasse.".php");
    }    
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("abstrata" . DIRECTORY_SEPARATOR .$nomeClasse.".php")===true){
        require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    } 


});


$carro = new Delray();
$carro->acelerar(80);

?>