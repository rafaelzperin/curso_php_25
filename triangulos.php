<?php
echo "<br> CONDIÇÃO DE EXISTÊNCIA DE UM TRIÂNGULO: <br> ";
$ladoA = 2;
$ladoB = 4;
$ladoC = 3;

if ($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA ){
    if ($ladoA == $ladoB && $ladoA == $ladoC && $ladoB == $ladoC ) {
        echo " <br> o triângulo é equilátero! <br>";
    } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC){
        echo " <br> o triângulo é isósceles! <br>";
    } else{
        echo " <br> o triângulo é escaleno! <br>";
    }
} else{ 
    echo " <br> não é triângulo <br>";
    exit;
}


