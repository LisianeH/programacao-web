<?php 

echo $senha = "teste";
echo "<hr>";
echo $cripto = base64_encode( $senha );
echo "<br>";
echo base64_decode( $cripto );
echo "<br>";
echo md5( $senha );
echo "<br>";
echo sha1( $senha );
echo "<br>";
echo password_hash( $senha, PASSWORD_DEFAULT );