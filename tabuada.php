<?php
$numero = 5; // tabuada do número
$limite = 10; // quando a tabuada para

  function tabuada($numero, $limite = 10) {
   for ($i = 0; $i <= $limite; $i++) { 
      $resultado = $numero * $i;
      echo " <br> $i x $numero = $resultado <br>";
   }
 }

 $numero = 6;
 $limite = 12;
 
 tabuada($numero, $limite);
