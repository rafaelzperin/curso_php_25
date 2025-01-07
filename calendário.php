/** 
 * criar um algoritmo que simula o calendário.
 * variáveis: $data = "01/01/2025"
 * validar a data
 * se é bissexto;
 * $data= 31/12/2024;
 *        0123456789 - posições
 * %dia = substr($data, 0 , 2)
 * %mes = substr($data, 3 , 2)
 * %ano = substr($data, 6 , 4)
 */
<?php
$data = "01/01/2025";
$dia = substr($data, 0 , 2);
$mes = substr($data, 3 , 2);
$ano = substr($data, 6 , 4);
$isdia = ($dia >= 1 && $dia <= 31);
$ismes = ($mes >= 1 && $dia <= 12);
$isano = ($ano > 0);

if (! $isdia){
echo " <br> o dia está incorreto <br>";
exit
} elseif (! $ismes){
echo " <br> o mês está incorreto <br>";
exit
} elseif (! $isano){
echo " <br> o ano está incorreto <br>";
} else{
  echo "<br> a data é válida $data <br>";
}

$centenario = $ano % 100;
$iscentenario = ($centenario == 0);
$resto = $ano % 4;
  if($iscentenario % 400 == 0){
    echo "<br> o ano é bissexto! <br>";
  } elseif (! $iscentenario | $resto == 0){
    echo "<br> o ano é bissexto! <br>";
  } else {
    echo "<br> o ano não é bissexto! <br>";
  }
