<?php

//declaração de tipos de escalares todos valores que vao vim na função vao ser convertidos pra interiro

/*function soma(int ...$valores):string{ //retorno string

    return array_sum($valores);
}*/

function soma(float ...$valores):float/*:string*/{ //retorno string

    return array_sum($valores);
}

echo var_dump( soma (2, 2));
echo "<br>";
echo soma (25, 33);
echo "<br>";
echo soma (1.5, 3.2);
echo "<br>";
?>