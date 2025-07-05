<link rel="stylesheet" href="../style/style-admin.css">
<?php session_start(); 
$seguranca = isset( $_SESSION['ativa'] ) ? TRUE : header( "location: login.php" );
?>
<?php require 'funtions.php'; ?> 

<?php if ( $seguranca ) { ?>
<div class="top-admin">
    <div>
        <h1>Acesso ao Painel Administrativo</h1>
        <h3>Bem vindo(a), <?php echo $_SESSION['nome']; ?></h3>
    </div>
    <div class="user-info">
        <img src="../<?php echo $_SESSION['foto']; ?>" alt="Foto de <?php echo $_SESSION['nome']; ?>" class="foto-admin">
        <div>
            <small><?php echo $_SESSION['email']; ?></small>
        </div>
    </div>
</div>
<?php } ?>

<nav>
    <ul>
        <li><a href="#mensagens">Mensagens</a></li>
        <li><a href="#adicionarProduto">Adicionar Produto</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
</nav>

<main>
    <section id="mensagens">
        <h2>Mensagens Recebidas</h2>
        <?php
        require_once "funtions.php";
        $connection = conectar();
        $query = "SELECT * FROM mensagens ORDER BY data_envio DESC";
        $result = mysqli_query($connection, $query);

        while ($msg = mysqli_fetch_assoc($result)) {
            echo "<div class='card'>";
            echo "Nome: <strong>{$msg['nome']}</strong><br>";
            echo "E-mail: {$msg['email']}<br>"; 
            echo "Telefone: {$msg['telefone']}<br>";
            echo "<p>Mensagem: {$msg['mensagem']}</p>";
            echo "Enviado em: {$msg['data_envio']}";
            echo "</div>";
        }
        ?>
    </section>

    <section id="adicionarProduto">
        <h2>Adicionar novo produto</h2>
        <form action="adicionarProduto.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nome" placeholder="Nome do Produto" required>
            <input type="number" name="preco" placeholder="Preço" step="0.01" required>
            <textarea name="descricao" placeholder="Descrição" required></textarea>
            <input type="file" name="foto" required>
            <button type="submit">Cadastrar Produto</button>
        </form>
    </section>

    <section id="produtos">
        <h2>Produtos Cadastrados</h2>
        <div class="grid-container">
        <?php
        $conn = conectar();
        $resultado = $conn->query("SELECT * FROM produtos");
        while ($produto =  $resultado->fetch_assoc()):
        ?>
            <div class="grid-item">
                <img src="../<?php echo $produto['foto']; ?>" alt="<?php echo $produto['nome']; ?>" width="150" height="200" style="object-fit:cover; border-radius:8px;">
                <h3><?php echo $produto['nome']; ?></h3>
                <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                <p><?php echo $produto['descricao']; ?></p>
                <a href="excluirProduto.php?id=<?php echo $produto['id']; ?>" 
                onclick="return confirm('Tem certeza que deseja excluir este produto?')" 
                class="botao-excluir">Excluir</a>
            </div>
        <?php endwhile; ?>
        </div>
    </section>
</main>

<?php require '../includes/footer.php'; ?>