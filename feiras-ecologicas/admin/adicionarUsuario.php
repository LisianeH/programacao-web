<?php
session_start();
require 'funtions.php';
$connection = conectar();

if (!isset($_SESSION['ativa'])) {
    header("location: login.php");
    exit();
}

if (isset($_POST['adicionar'])) {
    $nome  = mysqli_real_escape_string($connection, $_POST['nome']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $senha = sha1($_POST['senha']);

    $foto = "";
    if (!empty($_FILES['foto']['name'])) {
        $nomeFoto    = time() . "-" . $_FILES['foto']['name'];
        $caminhoFoto = "../imagens/usuarios/" . $nomeFoto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoFoto);
        $foto = "imagens/usuarios/" . $nomeFoto;
    }

    $query = "INSERT INTO usuarios (nome, email, senha, foto) 
                VALUES ('$nome', '$email', '$senha', '$foto')";

    if (mysqli_query($connection, $query)) {
        header("Location: adicionarUsuario.php?sucesso=1");
        exit();
    } else {
        $mensagem = "Erro ao cadastrar: " . mysqli_error($connection);
    }
}
?>

<link rel="stylesheet" href="../style/style-admin.css">

<div class="top-admin">
    <h1>Adicionar Novo Administrador</h1>
</div>

<section>
    <?php if (isset($_GET['sucesso'])) : ?>
        <p class="sucesso">✔️ Usuário cadastrado com sucesso!</p>
    <?php elseif (isset($mensagem)) : ?>
        <p style="color:red;"><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <label>Foto:</label>
        <input type="file" name="foto" required><br><br>

        <button type="submit" name="adicionar" class="botao-principal">Cadastrar</button>
        <a href="index.php#usuarios" class="botao-voltar">← Voltar</a>
    </form>
</section>
