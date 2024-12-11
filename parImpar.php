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
