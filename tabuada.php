<?php
$numero = 5; // tabuada do número
$limite = 10; // quando a tabuada para
 for ($i = 0; $i <= $limite; $i++) { 
    $resultado = $numero * $i;
    echo " <br> $i x $numero = $resultado <br>";
 }

  function tabuada($numero,$limite){
   for ($i = 0; $i <= $limite; $i++) { 
      $resultado = $numero * $i;
      echo " <br> $i x $numero = $resultado <br>";
   }
 }

 tabuada($numero=6, $limite=12);
