<?php

class Pessoa{

    public $nome; //atributo
    
    public function falar (){ //metodo

        return "O meu nome é " .$this->nome;
    }
}

$n1 = new Pessoa();
$n1->nome = "josimar candido";
echo $n1->falar();

?>