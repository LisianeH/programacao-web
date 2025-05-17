<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Layout com PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--topo-->
    <header class="topo">
        <?php require "layout/topo.php"; ?>
    </header>
    <nav class="menu">
        <?php include "layout/menu.php"; ?>
    </nav>
    <!--section cursos-->
    <section class="destaque">
        <?php require_once "layout/destaque.php" ?>
    </section>
    <!--conteúdo da página principal-->
    <main>
        <h1>Veja Nossos Cursos</h1>
        <h2>Procure um curso:</h2>
        <form method="post">
            <input type="search" name="busca">
            <input type="submit" name="enviar" value="Buscar">
        </form>
    </main>
    <!--rodapé-->
    <footer class="rodape">
        <?php include_once "layout/rodape.php" ?>
        <?php include "layout/menu.php"; ?>
    </footer>
</body>
</html>