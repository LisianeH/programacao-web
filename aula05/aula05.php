<?php

$churrasco = [ "Picanha", "Salsichão", "Cerveja", "Pão de Alho", "Coração" ];

// $array[] = ""; - adiciona um elemento no array
$churrasco[] = "Maminha";
print_r( $churrasco );
echo "<hr>";

// $last = array_pop($array); - remove o último elemento do array
// a variavel last retorna o item removido do array, em formato de string
// pode também ser utilizado sem a variavel caso só queira remover o ultimo item do array
$last = array_pop( $churrasco );
print_r( $churrasco );
echo "<h2> $last </h2>";
echo "<hr>";

// $first = array_shift($array); - remove o primeiro elemento do array (mesmo usabilidade do array pop)
$first = array_shift( $churrasco );
print_r( $churrasco );
echo "<h2> $first </h2>";
echo "<hr>";

// array_push($array, var) - adiciona valores a um array, podendo acrescentar mais de um elemento
// tem como retorno também (echo array_push($array, var)) que mostra a lista antes das adições e também o tamanho final do array
array_push( $churrasco, "Abacaxi", "Farofa", "Maionese" );
print_r( $churrasco );
echo "<hr>";

$dados = [  
    "aluno" => "Fulano",
    "cidade" => "Porto Alegre",
    "curso" => "PMM",
    "nascimento" => "25/09/1985"
];
// forma de adicionar informações em um array associativo 
$dados[ 'estado civil' ] = "Casado";
print_r( $dados );
echo "<hr>";

// array_keys($array) - retorna as chaves (campos a serem preenchidos no array associativo), indice e nome
// armazenado na variavel $chaves
$chaves = array_keys( $dados );
print_r( $chaves );
echo "<hr>";

// array_sum($array) - soma os elementos de um array
$total = [ 14, 10, 12.5, "10", 25, 32, 56 ];
$soma = array_sum( $total );
echo "<h1> $soma </h1>";
echo "<hr>";

// in_array(valor que está procurando, array da busca) , retorna um boolean 
$alunos = [ "Bruno", "Erick", "Richard", "Vitor", "Matheus" ];
$buscar = "Bruno";
if ( in_array( $buscar, $alunos ) ) {
    echo( "Aluno encontrado com nome " . $buscar );
} else {
    echo ( "Aluno não encontrado" );
}
echo "<hr>";

// explode(delimitador, variável da string) transforma uma string em um array a partir de um delimitador
$frase = "Hoje no almoço comi: frango, arroz, feijão, batata, alface, brócolis";
$comida = explode( ":", $frase );
print_r( $comida );
$listaComida = explode( ",", $comida[1] );
echo "<br>";
print_r( $listaComida );
echo "<hr>";

// implode(qual caractere usar para "separar" os dados em uma string, $array) transforma um array em uma string
$juntaArray = implode( " - ", $churrasco );
echo $juntaArray;
echo "<hr>";

// asort($array) - organizando em ordem alfabetica (A-Z) os elementos dentro do array, cuidar pois o indice se mantem o mesmo
asort( $churrasco );
print_r( $churrasco );
echo "<hr>";

// arsort($array) - organizando em ordem alfabetica (Z-A) os elementos dentro do array, cuidar pois o indice se mantem o mesmo
arsort( $churrasco );
print_r( $churrasco );
echo "<hr>";

?>