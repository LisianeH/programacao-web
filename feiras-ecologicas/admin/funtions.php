<?php

function conectar() {
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "feiras";
    $db_port = 3307;
    return mysqli_connect( $host, $db_user, $db_password, $db_name, $db_port );
}

function login( ) {
    if ( isset( $_POST['acessar'] ) and !empty( $_POST['email'] ) and !empty( $_POST['senha'] ) ){
        $email = filter_input( INPUT_POST, "email", FILTER_VALIDATE_EMAIL );
        $senha = sha1( $_POST['senha'] );

        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $connection = conectar();
        $executar = mysqli_query( $connection, $query );
        $return = mysqli_fetch_assoc( $executar );

        if ( !empty( $return['email'] ) ) {
            session_start();
            $_SESSION['nome'] = $return['nome'];
            $_SESSION['id'] = $return['id'];
            $_SESSION['ativa'] = TRUE;
            header( "location: index.php" );
        } else {
            echo "Usuário ou senha inválidos.";
        }
    }
}

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header( "location: login.php" );
}