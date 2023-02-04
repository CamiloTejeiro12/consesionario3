
<?php

include("conexion.php");

$conn=conectar();

session_start();


	$cliente = $_POST['cliente'];
	$password = $_POST['password'];


	$query = "INSERT INTO usuarios_cliente VALUES('$cliente', '$password')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_cliente.php?error=1");
	}

	

?>
