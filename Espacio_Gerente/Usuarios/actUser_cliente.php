<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$cliente = $_POST['cliente'];
	$password = $_POST['password'];
	
	$query = "UPDATE usuarios_cliente SET password= '$password' WHERE cliente = '$password'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:actualizar_usuario_cliente.php?error=1");
	}

?>
