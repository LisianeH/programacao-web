<?php require 'includes/header.php';
require 'admin/funtions.php';

$conn = conectar();
$resultado = $conn->query("SELECT * FROM produtos");
?>

<section class="produtos">
    <h2>Produtos em Destaque</h2>
    <?php while($produto = $resultado->fetch_assoc()): ?>
    <div class="produto">
        <h3><?php echo $produto['nome']; ?></h3>
        <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
        <?php if (!empty($produto['foto'])): ?>
        <img src="<?php echo $produto['foto']; ?>" alt="Imagem de <?php echo $produto['nome']; ?>" width="150">
        <?php endif; ?>
        <p><?php echo $produto['descricao']; ?></p>
    </div>
    <?php endwhile; ?>
</section>

<?php require 'includes/footer.php'; ?>