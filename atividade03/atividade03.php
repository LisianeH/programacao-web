<?php

function calculaMedia( $numeros ) {
    if ( empty( $numeros ) ) {
        return "A lista de números está vazia.";
    }
    
    $quantidade = count( $numeros );
    $soma = array_sum( $numeros );
    $resultado = $soma / $quantidade;
    return $resultado;
}

$numeros = [ 10, 2, 5, 3 ];
echo calculaMedia( $numeros );

?>