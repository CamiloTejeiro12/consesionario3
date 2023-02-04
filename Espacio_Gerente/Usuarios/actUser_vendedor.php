<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$vendedor = $_POST['vendedor'];
	$password = $_POST['password'];
	
	$query = "UPDATE usuarios_vendedor SET password = '$password'  WHERE vendedor = '$vendedor'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:actualizar_usuario_vendedor.php?error=1");
	}

	





?>
