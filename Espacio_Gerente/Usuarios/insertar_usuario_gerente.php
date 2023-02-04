
<?php

include("conexion.php");

$conn=conectar();

session_start();

	$gerente = $_POST['gerente'];
	$password = $_POST['password'];


	$query = "INSERT INTO usuarios_gerente VALUES('$gerente', '$password')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_gerente.php?error=1");
	}


?>
