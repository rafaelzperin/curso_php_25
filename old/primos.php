<?php
//Exercício 2: Dizer se o número é primo ou não.
$numero = 19;
//$restoPar = $numero % 2;
 for ($i = 2; $i <= ($numero - 1); $i++) { //i+= 2 -> i = i+2 
  $resto = $numero % $i;
  if ($resto == 0){
    echo " $numero NÃO É PRIMO!";
    exit;
      
  } else{

 }
 }
 echo " $numero é PRIMO!";

//$numero = 9;
//$limitador = $numero - 1;
//$primo = true;
//for ($i = 2; $i <= $limitador; $i++ ) {
  //  if ($resto == 0) {
    //    $primo = false;
      //  break;
    //}  
//}

//if ($primo) {
  //  echo "<br>O $numero é primo.";
//} else {
 //   echo "<br>O $numero NÃO é primo.";
//}


//<?php
$primos = [];
$numero = 10;
$quantidadePrimos = 10;
//$restoPar = $numero % 2;

while (count($primos) < $quantidadePrimos){
$numero = $numero +1;
 for ($i = 2; $i <= ($numero - 1); $i++) {
  $resto = $numero % $i;

     if ($resto == 0){
      $v = 1;
     break;
         
      } else{
      $v = 0;
     }
 }
    if ($v == 0){
       $primos[] = $numero;
    } else {
    }
}

echo " <br> Primos: " .implode(", ", $primos) . "<br>"; 
