<?php

$json = '[{"nome":"joao","idade":20},{"nome":"joao2","idade":23}]';

$data = json_decode($json, true);

//var_dump($data);
print_r($data);

?>