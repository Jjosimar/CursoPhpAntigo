<?php

require_once "config.php";

session_unset($_SESSION['nome']); //limpa a variavel nome
echo $_SESSION['nome'];

session_destroy(); //limpa todas as variaveis e remove o usuario de sessao
?>