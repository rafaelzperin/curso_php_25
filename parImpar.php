 <?php
 /**
 * Exercício 1:
 * atribuir valor para uma variável "numero"
 * e vamos  informar se é par ou ímpar
 */

 $numero = 3020923939239;
 $resto = $numero % 2;
 if ($resto == 0){
    echo "<br> O número $numero é <b> par <b> ! <br>";
 } else{
    echo "<br> O número $numero é <b> ímpar <b>! <br>";
 }

 // Quais são os 10 primeiros pares e ímpares?
 echo " <br> par ... impar <br>";
 $quantidade = 10;
 for ($i = 0; $i <= $quantidade; $i++) { 
   $par = 2 * $i;
   $impar = 2* $i + 1;
   echo " <br> $par ... $impar <br>";
//   $pares = array[$par];
}
//echo "$pares";