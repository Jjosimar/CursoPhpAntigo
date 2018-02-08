<?php

require_once("config.php");

use Cliente\cadastro;

$cad = new Cadastro();
$cad->setNome("JOsimar candido");
$cad->setEmail("JOsimar@candido.com.br");
$cad->setSenha("123");

$cad->registrarVenda();

?>