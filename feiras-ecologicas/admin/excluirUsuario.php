<?php
session_start();
require 'funtions.php';
$connection = conectar();

if (!isset($_SESSION['ativa'])) {
    header("location: login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("location: usuarios.php");
    exit();
}

$id = intval($_GET['id']);

$query = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($connection, $query);
$usuario = mysqli_fetch_assoc($result);

if (!$usuario) {
    header("location: usuarios.php?msg=Usuario não encontrado");
    exit();
}

if (!empty($usuario['foto']) && file_exists("../" . $usuario['foto'])) {
    unlink("../" . $usuario['foto']);
}

$delete = "DELETE FROM usuarios WHERE id = $id";

if (mysqli_query($connection, $delete)) {
    header("location: index.php#usuarios?msg=Usuário excluído com sucesso!");
} else {
    header("location: index.php#usuarios?msg=Erro ao excluir usuário");
}
?>
