<?php
$alunos = array(
    [
        "nome" => "Lisiane",
        "curso" => "ADS",
        "nota" => 9
    ],
    [
        "nome" => "Artur",
        "curso" => "Redes",
        "nota" => 8
    ],
    [
        "nome" => "Alan",
        "curso" => "IA e Dados",
        "nota" => 8.5
    ],
    [
        "nome" => "Lucca",
        "curso" => "Desenvolvimento Web",
        "nota" => 9.3
    ],
    [
        "nome" => "Lorenzo",
        "curso" => "Desenvolvimento BackEnd",
        "nota" => 9.9
    ]
);

foreach ( $alunos as $aluno ) {
    echo "<p>Aluno(a) " . $aluno["nome"] . ", do curso " . $aluno["curso"] . 
    ", tirou a nota " .  $aluno["nota"] . "</p>";
}

?>