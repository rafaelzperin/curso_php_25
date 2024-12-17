<?php
//Exercício 2: Dizer se o número é primo ou não.
$numero = 19;
//$restoPar = $numero % 2;
 for ($i = 2; $i <= ($numero - 1); $i++) {
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
