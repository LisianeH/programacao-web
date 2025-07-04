<?php require 'includes/header.php'; 
require 'admin/funtions.php';

$conn = conectar();
$resultado = $conn->query("SELECT * FROM expositores");
?>

<section class="expositores">
    <h2>Expositores</h2>
<?php while($expositor = $resultado->fetch_assoc()): ?>
    <div class="expositor">
        <h3><?php echo $expositor['nome']; ?></h3>
        <p>Produtos: <?php echo $expositor['produtos']; ?></p>
        <?php if (!empty($expositor['foto'])): ?>
            <img src="<?php echo $expositor['foto']; ?>" alt="Foto de <?php echo $expositor['nome']; ?>" width="150">
        <?php endif; ?>
    </div>
    <?php endwhile; ?>
</section>

<?php require 'includes/footer.php'; ?>