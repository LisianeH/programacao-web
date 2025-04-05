<?php
//Comandos Condicionais
$soma = 79;
if( $soma >= 50 ){
    echo "Você ganhou o frete grátis!";
}
echo "<hr>";

$idade = 23;
if( $idade < 18 ){
    echo "Site somente para maiores de 18 anos.";
} else{
    echo "Bem vindo ao site!";
}
echo "<hr>";

/*
== - Igualdade
=== - Igualdade extrema (até mesmo tipo de dado)
and / && - "e"
or / || - "ou"
*/
$funcionario = "Eli";
$cod = "10";
if( $funcionario == "Edi" and $cod === 10 ){
    echo "Acesso liberado ao sistema.";
} else{
    echo "Sem acesso.";
}
echo "<hr>";

$setor = "MKT";
if( $setor == "Financeiro" or $setor == "Gerencia" ){
    echo "Acesso liberado.";
} else{
    echo "Acesso bloqueado.";
}
echo "<hr>";

$nota1 = 8;
$nota2 = 6;
$nota3 = 7;
$media = ( $nota1 + $nota2 + $nota3 ) / 3;
if( $media >= 7 ){
    echo "O aluno foi APROVADO com média " . $media;
} elseif( $media <= 5 ){
    echo "O aluno está REPROVADO com média $media";
} else{
    echo "O aluno está em RECUPERAÇÃO";
}
echo "<hr>";

// ! - Sinal de negação ( != diferença )
$lado1 = 9;
$lado2 = 5;
$lado3 = 5;
if( $lado1 == $lado2 and $lado1 == $lado3 ){
    echo "Triângulo Equilatero";
} elseif( $lado1 != $lado2 and $lado1 != $lado3 and $lado2 != $lado3 ){
    echo "Triângulo Escaleno";
} else{
    echo "Triângulo Isosceles";
}
echo "<hr>";

//Switch
$dia = "Domingo";
switch( $dia ){
    case "Domingo":
        $resultado = "Dia de folga";
        break;
    case "Segunda":
        $resultado = "Dia de trabalho";
        break;   
    case "Terça":
        $resultado = "Dia de trabalho";
        break;
    case "Quarta":
        $resultado = "Dia de descanso";
        break;
    case "Quinta":
        $resultado = "Dia de trabalho";
        break;
    case "Sexta":
        $resultado = "Dia de trabalho";
        break;
    case "Sábado":
        $resultado = "Dia de passear";
        break;
    default:
        $resultado = "Valor não encontrado!";
        break;
}
echo $resultado;
echo "<hr>";

$idade = 17;
switch ( $idade ) {
    case $idade < 18:
        $result = "Você é menor de idade.";
        break;
    case $idade < 40:
        $result = "Você é uma pessoa adulto.";
        break;
    case $idade < 60:
        $result = "Você está na meia idade.";
        break;
    case $idade < 80:
        $result = "Você está ficando velho.";
        break;
    case $idade < 100:
        $result = "Você pode se considerar uma madura.";
        break;
    case $idade >= 100:
        $result = "Você está de parabéns.";
        break;
}
echo $result;
echo "<hr>";

//Operador ternário
// teste lógico ? "se valor verdadeiro" : "se valor falso"
$setor = "Financeiro";
echo $setor == "Marketing" ? "Acesso liberado." : "Acesso negado.";
echo "<hr>";

$media = 8;
$resultado = $media >= 7 ? "Aprovado" : "Reprovado";
echo $resultado;

?>