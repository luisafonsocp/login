<?php
if(
		isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true
	)
{
	unset ($_SESSION['autenticado']);
	header('location:index.php');
}else{
	header('location: ../index.php');
}

?>

<h1>SAIR</h1>