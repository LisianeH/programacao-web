<?php
session_start();
require_once "funtions.php";
$conn = conectar();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM produtos WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php#produtos");
        exit;
    } else {
        echo "Erro ao excluir produto: " . mysqli_error($conn);
    }
} else {
    echo "ID de produto não informado.";
}
?>