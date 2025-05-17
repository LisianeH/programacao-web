<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Layout com PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- topo -->
	<header class="topo">
		<?php require "layout/topo.php"; ?>
	</header>
	<!-- menu -->
	<nav class="menu">
		<?php include "layout/menu.php"; ?>
	</nav>	
	<!-- conteúdo principal da página -->
	<main>
		<h1>Fale Conosco</h1>
		<p>Nossa página de cursos...</p>
	</main>
	<!-- Rodapé -->
	<footer class="rodape">
		<?php include "layout/menu.php"; ?>
		<?php include_once "layout/rodape.php"; ?>
	</footer>
</body>
</html>