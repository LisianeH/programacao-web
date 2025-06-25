<?php session_start(); 
$seguranca = isset( $_SESSION['ativa'] ) ? TRUE : header( "location: login.php" );
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>
<?php if ( $seguranca ) { ?>
    <h1>Acesso ao Painel Administrativo</h1>
    <h3>Bem vindo(a), <?php echo $_SESSION['nome']; ?></h3>
    <a href="logout.php">Sair</a>
<?php } ?>
</body>
</html>