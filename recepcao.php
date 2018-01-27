<?php
session_start();


$usuario= $_POST['usuario'] ?? null;
$senha= $_POST['senha'] ?? null;

if( ($usuario == 'admin') && ($senha == '123456' ) ){
	

	$_SESSION['autenticado']= true;
	header('location:painel.php');
	
} else {
		echo "Acesso Negado!";
}		