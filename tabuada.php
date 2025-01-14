<?php
$numero = 5; // tabuada do número
$limite = 10; // quando a tabuada para

  function tabuada($numero, $limite) {
   for ($i = 0; $i <= $limite; $i++) { 
      $resultado = $numero * $i;
      echo " <br> $i x $numero = $resultado <br>";
   }
 }
 
 tabuada(4, $limite);
