<?php

    function ola(){

        $argumentos = func_get_args(); //recebe varios parametros ou nao
        return $argumentos;
    }

    var_dump(ola("Bom dia", 15));
?>