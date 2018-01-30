<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    //metodo construtor
    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    //metodo destruir
    public function __destruct(){

        //var_dump("DESTRUIR");
    }

    //converter o metodo para string
    public function __toString(){
        
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua avenida", "123", "santos");

echo $meuEndereco;
//var_dump($meuEndereco);

//unset($meuEndereco);

?>