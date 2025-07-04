<link rel="stylesheet" href="../style/style-admin.css">
<?php session_start(); 
$seguranca = isset( $_SESSION['ativa'] ) ? TRUE : header( "location: login.php" );
?>

<?php if ( $seguranca ) { ?>
    <h1>Acesso ao Painel Administrativo</h1>
    <h3>Bem vindo(a), <?php echo $_SESSION['nome']; ?></h3>
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
            $query = "SELECT * FROM produtos";
            $result = mysqli_query($connection, $query);

            while ($produto = mysqli_fetch_assoc($result)) {
                echo "<div class='grid-item'>";
                echo "<img src='../{$produto['foto']}' alt='{$produto['nome']}' width='150' height='150' style='object-fit:cover; border-radius:8px;'>";
                echo "<h3>{$produto['nome']}</h3>";
                echo "<p>R$ {$produto['preco']}</p>";
                echo "<p>{$produto['descricao']}</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>
</main>