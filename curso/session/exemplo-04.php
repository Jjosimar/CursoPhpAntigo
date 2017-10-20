<?php

session_id('5ekqvm30s8hft7acke6rkdv359');// receuperar a sessao
require_once("config.php");

//força gerar outro id da sessao
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>