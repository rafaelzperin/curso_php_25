<?php
// ordenar [10, 5, 2, 30, 85, 14]

$numeros = [84, 3, 10, 5, 2, 30, 85, 14];
$tamanho = count($numeros);

for ($j = 1; $j <= $tamanho - 1; $j++){
    for ($i = 1; $i <= $tamanho - 1; $i++){
        if ($numeros[$i-1] > $numeros[$i]){
           
            $a = $numeros[$i-1];
            $b = $numeros[$i];
            
            $numeros[$i-1] = $b;
            $numeros[$i] = $a;
        // echo " <br> Números: " .implode(", ", $numeros) . "<br>";
        } else{
        }
    }
}

 echo " <br> Números: " .implode(", ", $numeros) . "<br>";
