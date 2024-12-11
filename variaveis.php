<?php
const CPF = '123456789';
const VELOCIDADE_DA_LUZ = '320 m/s2'; // escrever em letras maiúsculas e underline
//tipos de dados primitivos do PHP: declarar variávies
$inteiro = 2;
$string = "um texto qualquer";
$nomePessoa = "Rafael Perin"; //style guide camel case
$nome_pessoa = "Rafael Perin"; // style guide snake case
$float = 2.5;
$double = 2.5468;
$char = 'a';


// tipos de dados estruturais
$array_short = []; // atual
$array = array( ); // antigo

$objeto = new stdClass(); // objeto dinâmico (poo - programação orientada ao objeto)
$classe = new stdClass(); // 

class CanetaAzul {
        //atributos ou propriedades
        public const COR = "Azul";
        public const PLASTICO = true;
        public $nome;
        public $tipomaterial = "Plástico";
        public $dimensoes;
        public $tipo;

        // métodos ou funções
    public function escrever() {

    }
    public function ler() {

    }

}
// localhost
echo "<br> olá, <b> mundo! </b> <br>";
echo "<br>" . $string; //. é a concatenação p juntar string e <br> é parágrafo

echo "<br> Rafael <br>
    <b> // negrito
        <i> // itálico
            Perin
        </i>
    </b>
    </br>";
echo "<br> CPF:" . CPF;
$soma = 10 +10;
echo "<br> soma: " . $soma;
$x = $soma - 2;
echo "<br> x:" . $x;

// tema de casa: fazer a tabuada e mostrar na tela
echo "<br> Tabuada: <br>";
    $numero = 6;
        $produto1 = $numero * 1;
        $produto2 = $numero * 2;
        $produto3 = $numero * 3;
        $produto4 = $numero * 4;
        $produto5 = $numero * 5;
        $produto6 = $numero * 6;
        $produto7 = $numero * 7;
        $produto8 = $numero * 8;
        $produto9 = $numero * 9;
        $produto10 = $numero * 10;
echo " <br> 6.1 =  $produto1 <br> 6.2 = $produto2 <br> 6.3 =  $produto3 
    <br> 6.4 = $produto4 <br> 6.5 = $produto5 <br> 6.6 = $produto6 
    <br> 6.7 = $produto7 <br> 6.8 = $produto8 <br> 6.9 = $produto9 <br> 6.10 = $produto10 "; 

    // echo " <br> $numero . 4 = " . $numero*4;
// && e, || ou e . concatenação
// == igual comparação, <= menor igual e >= maior igual, % módulo (resto da divisão 10%2 = 0)
