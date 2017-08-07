<?php
 
$nome = (int)$_GET["a"];
//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"];  //ip se o sistema estiver..
    $ip = $_SERVER["SCRIPT_NAME"];  //LOCALIZA AS PAGINAS QUE USUARIO UTILIZOU COMO POR EXEMPLO UM SISTEMA DE LOG

echo $ip;

?>