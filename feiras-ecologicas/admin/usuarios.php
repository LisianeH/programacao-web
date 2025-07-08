<?php
session_start();
require 'funtions.php';
$connection = conectar();

if (!isset($_SESSION['ativa'])) {
    header("location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="../style/style-admin.css">

<div class="top-admin">
    <h1>Gerenciar Administradores</h1>
    <div class="user-info">
        <img src="../<?php echo $_SESSION['foto']; ?>" alt="Foto de <?php echo $_SESSION['nome']; ?>" class="foto-admin">
        <div>
            <small><?php echo $_SESSION['email']; ?></small>
        </div>
    </div>
</div>

<section>
    <?php if (isset($_GET['msg'])) echo "<p style='color:green;'>{$_GET['msg']}</p>"; ?>

    <a href="adicionarUsuario.php" class="botao-adicionar">+ Adicionar Novo Administrador</a>

    <div class="grid-container">
        <?php
        $query = "SELECT * FROM usuarios ORDER BY nome ASC";
        $result = mysqli_query($connection, $query);

        while ($usuario = mysqli_fetch_assoc($result)) {
            echo "<div class='grid-item'>";
            echo "<img src='../{$usuario['foto']}' alt='{$usuario['nome']}' width='100' style='border-radius:50%; margin-bottom:10px;'>";
            echo "<h3>{$usuario['nome']}</h3>";
            echo "<p>{$usuario['email']}</p>";
            echo "<a href='editarUsuario.php?id={$usuario['id']}' class='botao-editar'>Editar</a> ";
            echo "<a href='excluirUsuario.php?id={$usuario['id']}' class='botao-excluir' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Excluir</a>";
            echo "</div>";
        }
        ?>
    </div>
</section>
