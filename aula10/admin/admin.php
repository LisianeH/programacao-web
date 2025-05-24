<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <title>Painel Admin</title>
</head>
<body>
<?php if( isset( $_SESSION['ativa']) ) {?>
    <h1>Bem vindo!</h1>
    <h2>Bem vindo <?php echo $_SESSION['usuario']; ?>, está é a área administrativa do seu sistema!</h2>

    <a href='logout.php'> Sair </a>
<?php } ?>
</body>
</html>