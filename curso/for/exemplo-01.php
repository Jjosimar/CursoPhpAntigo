<?php

/*for ($i = 0; $i <= 10; $i++){

    echo $i . "<br>";
}*/

echo "</br>";

for ($i = 0; $i < 1000; $i+=5){
    
    if($i >= 200 && $i <= 800) continue;

    if($i === 900) break;
        echo $i . "<br>";
}
?>