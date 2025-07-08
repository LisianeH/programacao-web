<?php
session_start();
require_once "funtions.php";
$conn = conectar();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "SELECT * FROM produtos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $produto = mysqli_fetch_assoc($result);

    if ($produto) {
        // Se existir imagem, remover
        if (!empty($produto['foto']) && file_exists("../" . $produto['foto'])) {
            unlink("../" . $produto['foto']);
        }

        // Agora sim exclui o registro
        $delete = "DELETE FROM produtos WHERE id = $id";
        if (mysqli_query($conn, $delete)) {
            header("Location: index.php#produtos?msg=Produto excluído com sucesso!");
            exit;
        } else {
            echo "Erro ao excluir produto: " . mysqli_error($conn);
        }
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "ID de produto não informado.";
}
?>
