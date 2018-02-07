<?php


interface veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($macha);
}


abstract class Automovel  implements  veiculo
{
    
    public function acelerar($velocidade){

        echo "o veiculo acelerou ate " . $velocidade . "km/h";
    }

    public function frenar($velocidade){

        echo " o veiculo frenou ate " . $velocidade . " km/h";
    }

    public function trocarMarcha ($macha){

        echo "o veiculo engatou a marcha ". $macha;
    }
}



?>