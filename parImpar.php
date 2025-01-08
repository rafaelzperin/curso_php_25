 <?php
 /**
 * Exercício 1:
 * atribuir valor para uma variável "numero"
 * e vamos  informar se é par ou ímpar
 */

//  $numero = 3020923939239;
//  $resto = $numero % 2;

//  if ($resto == 0){
//     echo "<br> O número $numero é <b> par <b> ! <br>";
//  } else{
//     echo "<br> O número $numero é <b> ímpar <b>! <br>";
//  }

 // Quais são os 10 primeiros pares e ímpares?
 
 $quantidade = 10;

 $pares = [];
 $impares = [];

 for ($i = 0; $i <= $quantidade; $i++) { 

   $par = 2 * $i;
   $impar = 2 * $i + 1;

   $pares[]=$par;
   $impares[]=$impar;
}

echo " <br> Pares: " .implode(", ", $pares) . "<br>"; 
echo " <br> Ímpares: " .implode(", ", $impares) . "<br>";