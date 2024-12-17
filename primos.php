<?php
//Exercício 2: Dizer se o número é primo ou não.
$numero = 15;
//$restoPar = $numero % 2;
 for ($i = 2; $i <= ($numero - 1); $i++) {
  $resto = $numero % $i;
  if ($resto == 0){
    echo " $numero NÃO É PRIMO!";
    break;
      
  } else{

 }
 }
 echo " $numero é PRIMO!";
