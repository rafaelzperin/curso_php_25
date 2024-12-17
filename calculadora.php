<?php
/**
 * operadores: +, -, *, /;
 * 
 */
echo "1 - adição <br> 2 - subtração <br> 3 - multiplicação <br> 4 - divisão";
$numero1=3;
$numero2=1;
$operador= 1;
//x=$numero1 $operador $numero2;

if ($operador == 1){
    $x = $numero1 + $numero2;
} elseif ($operador == 2){
    $x= $numero1 - $numero2;
} elseif ($operador == 3) {
    $x= $numero1 * $numero2;
} elseif ($operador == 4) {
    $x= $numero1 / $numero2;
} else {
    echo "escolha outro operador!";
    exit
}
echo "<br> o resultado é: $x";