<?php

if ($_SESSION['autenticado'] != true) {
	header('location: ../index.php');
}
	
?>

<nav>
	<a href="painel.php?pagina=inicio">Inicio</a>
	<a href="painel.php?pagina=cadastro">Cadastro</a>
	<a href="painel.php?pagina=sair">Sair</a>
</nav>