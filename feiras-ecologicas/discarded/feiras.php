<?php require 'includes/header.php'; 
require 'admin/funtions.php'; 

$conn = conectar();
$resultado = $conn->query( "SELECT * FROM feiras" );
?>

<section class="feiras">
    <h2>Programação de Feiras</h2>
    
    <?php while($feira = $resultado->fetch_assoc()): ?>
        <div class="feira">
            <h3><?php echo $feira['nome']; ?></h3>
            <p><strong>Dia:</strong> <?php echo $feira['dia_semana']; ?></p>
            <p><strong>Horário:</strong> <?php echo $feira['horario']; ?></p>
            <p><strong>Bairro:</strong> <?php echo $feira['bairro']; ?></p>
            <p><?php echo $feira['descricao']; ?></p>
        </div>
    <?php endwhile; ?>

</section>

<?php require 'includes/footer.php'; ?>
