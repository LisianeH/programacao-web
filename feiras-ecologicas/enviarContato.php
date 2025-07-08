<?php
require 'admin/funtions.php';
date_default_timezone_set("America/Sao_Paulo");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = conectar();

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']);
    $data_envio = date("Y-m-d H:i:s");

    $query = "INSERT INTO mensagens (nome, telefone, email, mensagem, data_envio)
        VALUES ('$nome', '$telefone', '$email', '$mensagem', '$data_envio')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php#contato';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem.'); window.location.href='index.php#contato';</script>";
    }

    mysqli_close($conn);
} else {
    header("Location: index.php");
}
?>
