<?php


if ($_SESSION['autenticado'] != true) {
	header('location:../index.php');
}
	
?>

<h1>INICIO</h1>