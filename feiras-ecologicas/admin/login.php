<link rel="stylesheet" href="../style/style-login.css">
<?php
require_once "funtions.php";
$connection = conectar();
$erroLogin = "";

if (isset($_POST['acessar'])) {
    $erroLogin = login($connection);
}
?>

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
            <label for="password">E-mail:</label>
            <input type="email" name="email" placeholder="Informe seu e-mail" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="senha" placeholder="Insira sua senha" required>
            <br>

            <?php if (!empty($erroLogin)) : ?>
                <p class="erro-login"><?php echo $erroLogin; ?></p>
            <?php endif; ?>

            <br>
            <button type="submit" name="acessar">Entrar</button>

            <p class="voltar">
                    <a href="../index.php">← Voltar para o site</a>
                </p>
        </fieldset>
    </form>

    <?php 
        if ( isset( $_POST['acessar'] ) ) {
            login( $connection );
        }
    ?>
</body>
</html>