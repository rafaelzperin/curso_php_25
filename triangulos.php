<?php
echo "<br> CLASSIFICAÇÃO DE UM TRIÂNGULO: <br> ";
$ladoA = 20;
$ladoB = 4;
$ladoC = 3;

$isTriangulo = ($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA);


if ( ! $isTriangulo ){ // NEGAÇÃO ! 
    echo " <br> não é triângulo <br>";
    exit;
}

if ($ladoA == $ladoB && $ladoA == $ladoC && $ladoB == $ladoC ) {
    echo " <br> o triângulo é equilátero! <br>";
} elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC){
    echo " <br> o triângulo é isósceles! <br>";
} else{
    echo " <br> o triângulo é escaleno! <br>";
}
