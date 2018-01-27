<?php
session_start();

if ($_SESSION['autenticado'] != true) {
	header('location:index.php');
}
	
?>

<html>
	<head>
		<title>PAINEL DE CONTROLE</title>
	</head>
	<body>

		<?php include ('menu.php');?>
		<?php
		$pagina= ($_GET['pagina']) ?? 'inicio';
		switch($pagina){
			case 'inicio': {
				include ('pagina/inicio.php');
				break;
			}
			case 'cadastro': {
				include ('pagina/cadastro.php');
				break;
			}
			case 'sair': {
				include ('pagina/sair.php');
				break;
			}
			case '404': {
				include ('pagina/404.php');
				break;
			}
			default:{
				header('location: painel.php?pagina=404');
				
			}
		}	
		?>	
	</body>

</html>