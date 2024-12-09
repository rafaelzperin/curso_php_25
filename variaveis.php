<?php
const CPF = '04185875070';
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
    <b>
        <i>
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
        $produto1 = 6 * 1;
        $produto2 = 6 * 2;
        $produto3 = 6 * 3;
        $produto4 = 6 * 4;
        $produto5 = 6 * 5;
        $produto6 = 6 * 6;
        $produto7 = 6 * 7;
        $produto8 = 6 * 8;
        $produto9 = 6 * 9;
        $produto10 = 6 * 10;
echo " <br> 6.1 = " . $produto1;
