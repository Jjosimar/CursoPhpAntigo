<?php

//funçoe anonimas
function test($callback){

    //processo lento
    $callback();

}

test(function(){

    echo "ok";
});


?>