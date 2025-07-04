<?php require 'includes/header.php'; ?>
<?php require 'admin/funtions.php'; ?>

<nav>
    <ul>
        <li><a href="#feiras">Feiras</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#expositores">Expositores</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="admin/index.php">Admin</a></li>
    </ul>
</nav>

<div class="banner">
    <h1>Bem-vindo às Feiras Ecológicas de Porto Alegre!</h1>
</div>

<main>
    <div class="container">
        <section id="feiras">
            <h2>Feiras</h2>
            <div class="grid-container">
            <?php
            $conn = conectar();
            $resultado = $conn->query("SELECT * FROM feiras");
            while($feira = $resultado->fetch_assoc()):
            ?>
                <div class="grid-item">
                    <h3><?php echo $feira['nome']; ?></h3>
                    <p><?php echo $feira['descricao']; ?></p>
                </div>
            <?php endwhile; ?>
            </div>
        </section>

        <section id="produtos">
            <h2>Produtos</h2>
            <div class="grid-container">
            <?php
            $resultado = $conn->query("SELECT * FROM produtos");
            while($produto = $resultado->fetch_assoc()):
            ?>
                <div class="grid-item">
                    <img src="<?php echo $produto['foto']; ?>" alt="<?php echo $produto['nome']; ?>" width="150" height="200" style="object-fit:cover; border-radius:8px;">
                    <h3><?php echo $produto['nome']; ?></h3>
                    <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <p><?php echo $produto['descricao']; ?></p>
                </div>
            <?php endwhile; ?>
            </div>
        </section>

        <section id="expositores">
            <h2>Expositores</h2>
            <div class="grid-container">
            <?php
            $resultado = $conn->query("SELECT * FROM expositores");
            while($expositor = $resultado->fetch_assoc()):
            ?>
                <div class="grid-item">
                    <h3><?php echo $expositor['nome']; ?></h3>
                    <p>Produtos: <?php echo $expositor['produtos']; ?></p>
                    <?php if (!empty($expositor['foto'])): ?>
                        <img src="<?php echo $expositor['foto']; ?>" alt="Foto de <?php echo $expositor['nome']; ?>" width="150">
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>
        </section>

        <section id="contato">
            <h2>Contato</h2>
            <form method="POST" action="enviarContato.php">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="telefone" placeholder="Telefone">
                <input type="email" name="email" placeholder="E-mail">
                <textarea name="mensagem" placeholder="Mensagem"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
</main>

<?php require 'includes/footer.php'; ?>