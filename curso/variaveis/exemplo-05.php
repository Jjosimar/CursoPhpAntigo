<?php

 $nome = "Josimar";

 function teste(){
     global $nome;
     echo $nome;
 }

 function teste2($nome){
   // $nome = "joao";
    echo "</br>" . $nome. " agora no teste2";

 }

 teste();
 teste2($nome);

?>