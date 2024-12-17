<?php
/**
 * operadores: +, -, *, /;
 * 
 */
echo "<br> CALCULADORA <br>";
$numero1=3;
$numero2=0;
$operador= "/";

if ($operador == "+"){
    $resultado = $numero1 + $numero2;
} elseif ($operador == "-"){
    $resultado= $numero1 - $numero2;
} elseif ($operador == "*") {
    $resultado= $numero1 * $numero2;
} elseif ($operador == "/" && $numero2 == 0) {
    echo "ERRO: divisão por zero";
    exit;
} 
elseif ($operador == "/") {
    $resultado= $numero1 / $numero2;
} else {
    echo " <br> ERRO <br>";
}

echo " <br> $numero1 $operador $numero2 =  $resultado <br>";