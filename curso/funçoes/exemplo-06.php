<?php

$pessoa = array(
    'nome' => 'joao',
    'idade' => 20
);

foreach ($pessoa as &$value ){

     //if (gettype($value) === 'integer') $value += 10;

    if (gettype($value) === 'string') $value ='candido';

    echo $value . '<br>';
}

print_r($pessoa);
?>