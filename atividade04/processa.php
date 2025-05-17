<?php
$cursos = ["PHP", "HTML", "CSS", "JavaScript", "Jquery", "Python", "SQL", "Bootstrap", "Java", "C++", "Fluter"];

$busca = isset( $_POST[ 'busca' ] ) ? trim( $_POST[ 'busca' ] ) : '';

if ($busca != '') {
    $cursosLower = array_map( 'strtolower', $cursos );
    $buscaLower = strtolower( $busca );

    if ( in_array( $buscaLower, $cursosLower ) ) {
        echo "Temos o curso de: <strong>$busca</strong>";
    } else {
        echo "Desculpe, não encontramos o curso: <strong>$busca</strong>";
    }
} else {
    echo "Por favor, digite um valor para busca.";
}
?>

<br><br>
<a href="index.php">Voltar para o formulário</a>