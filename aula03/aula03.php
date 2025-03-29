<?php
//Comando de Repetição (looping)
/*
    Indice: de onde começa a repetição
    Teste lógico: lógica para continuar repetindo
    Incremento: o que acontece com o Indice após cada repetição.
*/

for ( $i=0; $i < 10; $i++ ) { 
    echo "$i <br>";
}
echo "<hr>";
for ( $i=0; $i <= 20; $i+=2 ) { 
    echo "$i <br>";
}
echo "<hr>";
$bebidas = [ "Suco", "Refrigerante", "Água", "Cerveja", "Vinho" ];

$quantidade = count( $bebidas );

for ( $i=0; $i < $quantidade; $i++ ) { 
    echo $bebidas[$i] . "<br>";
}
echo "<hr>";

$nomeCompleto = "Lisiane";
$nomeCompleto .= " Hoffmeister";

echo "<h1> $nomeCompleto </h1>";
echo "<hr>";

$lista = "<ul>";
for ( $i=0; $i < $quantidade ; $i++ ) { 
    $lista .= "<li>" . $bebidas[$i] . "</li>";
}
$lista .= "</ul>";

echo $lista;
echo "<hr>";

// WHILE
$i = 1;
while ( $i <= 10 ) {
    echo "$i - ";
    $i++;
}
echo "<hr>";

$i = 0;
while ( $i < $quantidade ) {
    echo $bebidas[$i] . "<br>";
    $i++;
}
echo "<hr>";

// Foreach : perfeito para se utilziar com Arrays
foreach ( $bebidas as $bebida ) {
    echo $bebida . "<br>";
}
echo "<hr>";

$produtos = array(
    [
        "nome" => "Teclado",
        "modelo" => "ABC",
        "preco" => "R$ 49,90"
    ],
    [
        "nome" => "Mouse",
        "modelo" => "G35",
        "preco" => "R$ 89,90"
    ],
    [
        "nome" => "Monitor",
        "modelo" => "AOC",
        "preco" => "R$ 799,90"
    ]
);

//echo $produtos[2]["nome"] - para apresentar o monitor

foreach ( $produtos as $produto ) {
    echo "<p>O produto " . $produto["nome"] . " do modelo " . $produto["modelo"] . 
    " está custando " .  $produto["preco"] . "</p>";
}

?>