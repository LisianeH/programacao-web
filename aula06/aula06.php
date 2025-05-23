<?php

$texto1 = 'ESSA função faz toda string FICAR MINÚSCULA';
echo strtolower( $texto1 );
echo "<hr>";

$texto1 = 'MB_convert_case: pode utilizar "mb_" antes da FUNÇÃO para converter o caractere com ACENTUAÇÃO';
echo mb_strtolower( $texto1 );
echo "<hr>";

$texto2 = 'essa FUNÇÃO FAZ TODA STRING ficar maiúscula';
echo strtoupper( $texto2 );
echo "<hr>";

$texto3 = 'deixa somente a primeira letra da string maiúscula';
echo ucfirst( $texto3 );
echo "<hr>";

$texto4 = 'deixa todas as PRIMEIRAS letras maiúsculas';
echo ucwords( $texto4 );

?>