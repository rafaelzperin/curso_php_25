<?php
/**
 * operadores: +, -, *, /;
 * 
 */
echo "1 - adição <br> 2 - subtração <br> 3 - multiplicação <br> 4 - divisão";
$numero1=3;
$numero2=1;
$operador= "*";
//x=$numero1 $operador $numero2;

if ($operador == "+"){
    $x = $numero1 + $numero2;
} elseif ($operador == "-"){
    $x= $numero1 - $numero2;
} elseif ($operador == "*") {
    $x= $numero1 * $numero2;
} else ($operador == "/") {
    $x= $numero1 / $numero2;
}

echo "<br> $numero1 $operador $numero2 =  $x";