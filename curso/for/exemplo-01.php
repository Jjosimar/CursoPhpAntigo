<?php

/*for ($i = 0; $i <=10; $i++){

    echo "</br>". $i . " ";
}*/

echo "</br>";

for ($i = 0; $i < 1000; $i+=5){
    
    if($i >= 200 && $i <= 800) continue; //se for extamente os 200 e os 800 tira o sinal de igual

    if($i === 900) break;
        echo $i . "<br>";
}
?>