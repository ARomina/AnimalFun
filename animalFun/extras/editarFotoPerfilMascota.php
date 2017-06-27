<?php

	include_once '../conexion.php';

	session_start();

	$usuario = $_SESSION['usuario'];
	$idUsuario = $_SESSION['id'];

	$uploadDir = '../recursos/img/fotosPerfilMascota/';

	if(isset($_POST['upload'])){
		
		$fileName = $_FILES['fotoMascota']['name'];
		$tmpName = $_FILES['fotoMascota']['tmp_name'];
		$fileSize = $_FILES['fotoMascota']['size'];
		$fileType = $_FILES['fotoMascota']['type'];
		
		$filePath = $uploadDir . $fileName;
		$resultado = move_uploaded_file($tmpName, $filePath);
		if(!$resultado){
			echo "Error al subir la imagen";
			$filePath="../recursos/img/avatar-placeholder.jpg";
		}

		$query = "UPDATE mascota SET foto = '$filePath' WHERE usuario = '$idUsuario' AND id = '$idMascota'";

		if(mysqli_query($con, $query)){
			header("location: modifDatosMascota.php");
		}else{
			die("Error");
		}

	}

?>