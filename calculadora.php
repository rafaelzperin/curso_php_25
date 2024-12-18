<?php
/**
 * operadores: +, -, *, /, %;
 * 
 */
echo "<br> CALCULADORA <br>";
$numero1=3;
$numero2=5;
$operador= "/";

if ($operador == "+"){
    $resultado = $numero1 + $numero2;
} elseif ($operador == "-"){
    $resultado= $numero1 - $numero2;
} elseif ($operador == "*") {
    $resultado= $numero1 * $numero2;
} elseif ($operador == "/" && $numero2 == 0) {
    echo "ERRO: divisão por zero";
} 
elseif ($operador == "/") {
    $resultado= $numero1 / $numero2;
} elseif ($operador == "#"){
    $resultado= $numero2 * 100 / $numero1;
}
else {
    echo " <br> ERRO <br>";
}
    if ($operador == "#"){
    echo "$numero2 é $resultado %";
}
    else{
        echo " <br> $numero1 $operador $numero2 =  $resultado <br>";
    }