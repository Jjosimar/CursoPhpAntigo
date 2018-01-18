<?php
//colocar as letras maiuscula
/*$nome = " josimar candido";
echo strtoupper($nome);*/

/*$nome = "JOSIMAR MAZOLA";
echo "<br>" . $nome . "<br>";

echo strtolower($nome) ."<br>";
echo ucwords($nome);*/


$nome = "josimar candido";
$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>". $nome;

echo "<br>". $nome ."<br>". ucwords($nome); // letras iniciais maiuscula  
echo "<br>". ucfirst($nome); // so o primeiro nome maiuculo


?>