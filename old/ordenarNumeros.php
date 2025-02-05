<?php
// ordenar [10, 5, 2, 30, 85, 14]

$numeros = [ 150,10, 5, 2, 30, 85, 14];
$tamanho = count($numeros);
// $k = 0;
for ($j = 1; $j <= $tamanho - 1; $j++){
    $numerosAnt = $numeros; 
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
    if ( $numeros == $numerosAnt){
        break;
    } else {

    }
    // $k++;
}
//echo " $k"; número de iterações
 echo " <br> Números: " .implode(", ", $numeros) . "<br>";


//  <?php 
//             echo "Array desordenado <br> [10] [5] [2] [30] [85] [14]";

//             $array = [10, 5, 2, 30, 85, 14];
//             //         0, 1, 2,  3,  4,  5

//             $tam = count($array) -1; // 6 - 1 = 5

//             for ($i = 0; $i < $tam / 2; $i++ ) {       
//                 for ($j = $tam +1 / 2; $j > 0; $j--) {
//                     $anterior = $j -1;

//                     if ($array[$anterior] > $array[$j]) {
//                         $temp = $array[$anterior];
//                         $array[$anterior] = $array[$j];
//                         $array[$j] = $temp;
//                     }
//                 }

//                 if ($array[$i] < $array[$j]) {
//                     $temp = $array[$i];
//                     $array[$i] = $array[$j];
//                     $array[$j] = $temp;
//                 }
//             }

//             echo "<br><br>Array Ordenado<br>";
//             foreach($array as $resultado){
//                 echo "[$resultado] ";
//             }
//         ?>
