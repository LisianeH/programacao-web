<?php require 'includes/header.php'; ?>

<section class="contato">
    <h2>Entre em Contato</h2>
    <form method="POST" action="#">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        
        <label>Telefone:</label>
        <input type="text" name="telefone" required>
        
        <label>E-mail:</label>
        <input type="email" name="email" required>
        
        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</section>

<?php require 'includes/footer.php'; ?>
