<?php

$lanche = 'Pizza';
echo $lanche;
echo "<hr>";

echo "Hoje no café da manhã comi $lanche";
// o simbolo do . concatena textos
echo "Vou comer " . $lanche . " hoje a noite!";
echo "<hr>";

//Array simples
$lanches = array( "Pizza", "Pastel", "Xis", "Batata Frita", "Hamburguer" );
echo $lanches[ 1 ];
// print_r($lanches); - serve para o programador identificar o array, como um debug

echo "<h1>" . $lanches[ 4 ] . "</h1>";
echo $lanches[ 2 ] . "<br>" . $lanches[ 3 ];
echo "<hr>";

//Array Associativo
$aluno = array(
    "nome" => "Vitor",
    "curso" => "ADS",
    "altura" => 1.75,
    "cidade" => "Porto Alegre"
);
print_r( $aluno );

echo "<br>" . $aluno[ "curso" ];

//a partir do PHP 5.4 - podemos criar arrays com []
$frutas = [ "Laranja", "Limão", "Morango" ];

//array MultiDimensional
$alunos = array(
    [
        "nome" => "Ricardo",
        "curso" => "ADS",
        "cidade" => "Canoas"
    ],
    [
        "nome" => "Sara",
        "curso" => [ "PMM", "Gastronomia" ],
        "cidade" => "POA"
    ],
    [
        "nome" => "Eddie",
        "curso" => "Redes",
        "cidade" => "Esteio"
    ]
);
echo "<br>" . "<hr>";

echo $alunos[2]["curso"];

echo "<pre>";
print_r( $alunos );
echo "</pre>";

//constante
define( "ALUNO", "Luis Felipe" );  // name, value
echo ALUNO;

?>