<?php

spl_autoload_register(function($nameClass){

    $dirClass = 'class';
    $filename = $dirClass . DIRECTORY_SEPARATOR . "";

    if(file_exists($filename)){
        require_once($filename);
    }
});


?>