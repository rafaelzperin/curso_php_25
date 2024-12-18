<?php
echo "<br> CONDIÇÃO DE EXISTÊNCIA DE UM TRIÂNGULO: <br> ";
$ladoA = 1;
$ladoB = 2;
$ladoC = 3;

if ($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA ){
    echo "<br> é triângulo! <br>";
} else{ 
    echo " <br> não é triângulo <br>";
}

if ($ladoA == $ladoB && $ladoA == $ladoC && $ladoB == $ladoC ) {
    echo " <br> o triângulo é equilátero! <br>";
} elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC){
    echo " <br> o triângulo é isósceles! <br>";
} else{
    echo " <br> o triângulo é escaleno! <br>";
}
