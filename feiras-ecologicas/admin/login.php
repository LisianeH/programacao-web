<?php require_once "funtions.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso administrador</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Acesso administrador</legend>
            <input type="email" name="email" placeholder="Informe seu E-mail" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="senha" placeholder="Insira sua Senha" required>
            <br>
            <button type="submit" name="acessar">Entrar</button>
        </fieldset>
    </form>
    <?php 
        if ( isset( $_POST['acessar'] ) ) {
            login( $connection );
        }
    ?>
</body>
</html>