<?php
require_once "funtions.php";
$connection = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $pasta = "../imagens/produtos/";
    $foto = $pasta . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);

    $fotoDb = "imagens/produtos/" . basename($_FILES["foto"]["name"]);

    $query = "INSERT INTO produtos (nome, preco, descricao, foto) 
                VALUES ('$nome', '$preco', '$descricao', '$fotoDb')";

    if (mysqli_query($connection, $query)) {
        header("Location: index.php#produtos");
        exit;
    } else {
        echo "Erro ao cadastrar produto.";
    }
}
?>
