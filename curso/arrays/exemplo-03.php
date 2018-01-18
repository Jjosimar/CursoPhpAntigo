<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'joao',
    'idade' => 20
));


array_push($pessoas, array(
    'nome' => 'joao2',
    'idade' => 23
));

print_r($pessoas[0]['nome']);
//print_r($pessoas[0]);
//print_r($pessoas);
?>