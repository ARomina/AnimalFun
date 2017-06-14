<?php

	include_once '../conexion.php';

	session_start();

	$usuario = $_SESSION['usuario'];

	$uploadDir = '../img/fotosPerfilUsuario/';

	if(isset($_POST['upload'])){
		
		$fileName = $_FILES['fotoMascota']['name'];
		$tmpName = $_FILES['fotoMascota']['tmp_name'];
		$fileSize = $_FILES['fotoMascota']['size'];
		$fileType = $_FILES['fotoMascota']['type'];
		
		$filePath = $uploadDir . $fileName;
		$resultado = move_uploaded_file($tmpName, $filePath);
		if(!$resultado){
			echo "Error al subir la imagen";
			//$filePath="../img/avatar-placeholder.jpg";
			$imagenPlaceholder = "../img/avatar-placeholder.jpg";
		}
			
		if(!get_magic_quotes_gpc()){
			$fileName = addslashes($fileName);
			$filePath = addslashes($filePath);
		} 

		$query = "UPDATE mascota SET foto = '$filePath' WHERE usuario = '$usuario' AND id = ";

		if(mysqli_query($con, $query)){
			header("location: ../adminUsuarioMascotas.php");
		}else{
			die("Error");
		}

	}

?>