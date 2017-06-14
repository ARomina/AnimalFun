<?php

	include_once "../conexion.php";

	//session_start();

	//Inicialización de variable
	$tipoMascota = "";

	$tipoMascota = $_GET['tipo'];

	$sql = "SELECT * from raza WHERE tipo = '$tipoMascota'";

	$resultado = mysqli_query($con, $sql);

	if($resultado->num_rows > 0){
		while()
	}
	




?>