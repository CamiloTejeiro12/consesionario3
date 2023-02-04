
<?php

include("conexion.php");

$conn=conectar();

session_start();


	$vendedor = $_POST['vendedor'];
	$password = $_POST['password'];


	$query = "INSERT INTO usuarios_vendedor VALUES('$vendedor', '$password')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usuarios.php");
	}else{
		Header("Location:agregar_usuario_vendedor.php?error=1");
	}

	

?>
