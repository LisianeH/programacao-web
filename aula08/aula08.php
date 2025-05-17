<!DOCTYPE html>
<html>
<head>
    <title>Formulários</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu e-mail">
        <input type="number" name="idade" placeholder="Sua idade">
        <input type="submit" name="enviar">
    </form>

    <?php
        if ( isset( $_POST[ 'enviar' ] ) ) {
            // print_r( $_POST ); -para apresentar o array associativo
            if ( strlen( $_POST[ 'nome' ] ) > 3 ) {
                $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
            }
            if ( !empty( $_POST[ 'enviar' ] ) ) {
                $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
            }
            if ( $_POST[ 'idade' ] >= 18 ) {
                $idade = filter_input( INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT );
            }
            if ( isset( $nome ) and isset( $email ) and isset( $idade ) ) {
                echo "<h2>Continua com o envio do Form</h2>";
                echo "<p> Nome: $nome </p>";
                echo "<p> E-mail: $email </p>";
                echo "<p> Idade: $idade </p>";
            } else {
                echo "<p>Preencha os dados corretamente</p>";
            }
            
        }
    ?>
</body>
</html>