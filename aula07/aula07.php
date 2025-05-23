<?php 
// criando funções com PHP
function bemVindo(){
    echo "Bem Vindo(a)!";
}
bemVindo();
echo "<hr>";

function welcome( $user ){
    $frase = "Bem vindo, $user <br>";
    return $frase;
}
$user = "Lisiane";
$aluno = "Alan";
echo welcome( $user );
echo welcome( $aluno );
echo welcome( "Artur" );
echo "<hr>";

function resultadoFinal( $nota1, $nota2, $nota3, $aluno = "aluno" ) {
    if ( is_numeric( $nota1 ) and is_numeric( $nota2 ) and is_numeric( $nota3 ) ) {
        $media = ( $nota1 + $nota2 + $nota3 ) / 3;
        // função round serve para "arrendondar" a quantidade de caracteres após a vírgula
        $media = round( $media, 1 );
        if ( $media >= 7 ) {
            $media = str_replace( ".", ",", $media );
            $resultado = "O $aluno está APROVADO com média: " . $media;
        } elseif ( $media <= 5 ) {
            $media = str_replace( ".", ",", $media );
            $resultado = "O $aluno está REPROVADO com média: " . $media;
        } else {
            $media = str_replace( ".", ",", $media );
            $resultado = "O $aluno está em RECUPERAÇÃO com média: " . $media;
        }
    } else {
        $resultado = "Algum dado das notas não é numérico!";
    }
    return $resultado;
}
$nota1 = 7.2;
$nota2 = 9.6;
$nota3 = 8.3;
$aluno = "José";
echo resultadoFinal( $nota1, $nota2, $nota3, $aluno ) . "<br>";
echo resultadoFinal( 4, 5, 3, "Pedro" ) . "<br>";
echo resultadoFinal( 6, 7, 5 ) . "<br>";
echo resultadoFinal( "Maria", 7, 5 ) . "<br>";
echo "<hr>";

function listar( $arrayList, $order = "asc" ) {
    if ( is_array( $arrayList ) and !empty( $arrayList ) ) {
        
        $arrayList = array_map( "ucfirst", $arrayList );
        $order == "desc" ? arsort( $arrayList ) : asort( $arrayList );
        
        $resultado = "<ul>";
        foreach ( $arrayList as $item ) {
            // com .= iremos incrementar a variável
            $resultado .= "<li> $item </li>";
        }
        $resultado .= "</ul>";
    } else {
        $resultado = "O parâmetro passado está vazio ou não é uma lista! <br>";
    }
    return $resultado;
}
$frutas = [ "Laranja", "Morango", "Uva", "banana", "abacaxi" ];
$teste = array();

echo listar( "Algo para gerar o erro" );
echo listar( $frutas );
// sem a verificação de empty (vazio), ele somente não aparece o array e não gera um retorno
echo listar( $teste );
echo listar( $frutas, "desc" );
echo "<hr>";

?>