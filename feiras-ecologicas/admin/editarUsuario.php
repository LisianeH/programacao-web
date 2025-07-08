<?php
session_start();
require 'funtions.php';
$connection = conectar();

if (!isset($_SESSION['ativa'])) {
    header("location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("location: index.php#usuarios");
    exit();
}

$id = intval($_GET['id']);

if (isset($_POST['editar'])) {
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    $senhaSQL = "";
    if (!empty($_POST['senha'])) {
        $senha = sha1($_POST['senha']);
        $senhaSQL = ", senha = '$senha'";
    }

    $fotoSQL = "";
    if (!empty($_FILES['foto']['name'])) {
        $nomeFoto = time() . "-" . $_FILES['foto']['name'];
        $caminhoFoto = "../imagens/usuarios/" . $nomeFoto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoFoto);
        $fotoSQL = ", foto = 'imagens/usuarios/$nomeFoto'";
    }

    $update = "UPDATE usuarios 
                SET nome = '$nome', email = '$email' 
                $senhaSQL 
                $fotoSQL 
                WHERE id = $id";

    if (mysqli_query($connection, $update)) {
        if ($_SESSION['id'] == $id) {
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            if (!empty($_FILES['foto']['name'])) {
                $_SESSION['foto'] = "imagens/usuarios/$nomeFoto";
            }
        }
        header("Location: editarUsuario.php?id=$id&sucesso=1");
        exit();
    } else {
        $mensagem = "Erro ao atualizar: " . mysqli_error($connection);
    }
}

$query = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($connection, $query);
$usuario = mysqli_fetch_assoc($result);

if (!$usuario) {
    echo "Usuário não encontrado.";
    exit();
}
?>

<link rel="stylesheet" href="../style/style-admin.css">

<div class="top-admin">
    <h1>Editar Administrador</h1>
</div>

<section>
    <?php if (isset($_GET['sucesso'])) : ?>
        <p class="sucesso">✔️ Alterações salvas com sucesso!</p>
    <?php elseif (isset($mensagem)) : ?>
        <p class="erro"><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
        <input type="password" name="senha" placeholder="Nova senha (opcional)"><br>

        <label>Foto atual:</label>
        <img src="../<?php echo $usuario['foto']; ?>" alt='{$usuario['nome']}' width='70' style='border-radius:50%; margin-bottom:10px;'><br>
        <input type="file" name="foto"><br><br>

        <button type="submit" name="editar" class="botao-principal">Salvar Alterações</button>
        <a href="index.php#usuarios" class="botao-voltar">← Voltar</a>
    </form>
</section>