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

echo json_encode($pessoas);
?>