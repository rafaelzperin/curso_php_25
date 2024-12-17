<?php
/**
 * operadores: +, -, *, /;
 * 
 */
echo "CALCULADORA";
$numero1=3;
$numero2=1;
$operador= "/";
//x=$numero1 $operador $numero2;

if ($operador == "+"){
    $x = $numero1 + $numero2;
} elseif ($operador == "-"){
    $x= $numero1 - $numero2;
} elseif ($operador == "*") {
    $x= $numero1 * $numero2;
} elseif ($operador == "/") {
    $x= $numero1 / $numero2;
} else {
    echo " <br> ERRO";
}

echo " $numero1 $operador $numero2 =  $x";