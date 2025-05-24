<?php

$user = "admin@gmail.com";
$pass = sha1("teste123");

if ( isset( $_POST['logar'] ) ) {
    $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
    $senha = sha1( $_POST['senha'] );

    $email = $user == $email ? $email : "";
    $senha = $pass == $senha ? $senha : "";
    if ( !empty( $email ) and !empty( $senha ) ) {
        session_start();
        $_SESSION['usuario'] = $email;
        $_SESSION['ativa'] = true;
        //redirecionamento
        header( "location: admin.php" );
    } else {
        echo "Usuário ou senha inválidos!";
        echo "<a href='index.php'> Voltar </a>";
    }
}


/*
session_start();

$_SESSION['usuario'] = "Fulano";
$_SESSION['email'] = "teste@email.com";
$_SESSION['ativa'] = true;

echo "Sessão iniciada com sucesso";
echo "<a href='admin.php'> ACESSAR </a>";
*/