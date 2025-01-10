<?php
// ordenar [10, 5, 2, 30, 85, 14]

$numeros = [10, 5, 2, 30, 85, 14];
$tamanho = count($numeros);
//$tamanho - 1
for ($i = 1; $i = 2; $i++){
        if ($numeros[$i-1] > $numeros[$i]){
            $a = $numeros[$i-1];
            $b = $numeros[$i];
            $numeros[$i-1] = $b;
            $numeros[$i] = $a;
        } else{
        }
    }

//echo " <br> Primos: " .implode(", ", $numeros) . "<br>"; 
    
