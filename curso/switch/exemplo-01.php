<?php

$diaDaSemana = 8 ;//date("w");

//echo $diaDaSemana;

switch ($diaDaSemana){

    case 0:
    echo "Domingo";
    break;

    case 1:
    echo "Segunda - feira";
    break;

    case 2:
    echo "Terça";
    break;

    case 3:
    echo "Quarta";
    break;
    
    case 4:
    echo "Quinta -feira";
    break;
    
    case 5:
    echo "Sexta -feira";
    break;
    
    case 6:
    echo "Sabado";
    break;

    default:
    echo "Data Invalida";
    break;
}

?>