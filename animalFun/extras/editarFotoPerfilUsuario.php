<?php

	include_once '../conexion.php';

	session_start();

	$usuario = $_SESSION['usuario'];

	$uploadDir = '../recursos/img/fotosPerfilUsuario/';

	if(isset($_POST['upload'])){
		
		$fileName = $_FILES['userfile']['name'];
		$tmpName = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		
		$filePath = $uploadDir . $fileName;
		$resultado = move_uploaded_file($tmpName, $filePath);
		if(!$resultado){
			echo "Error al subir la imagen";
			$filePath="";
		}
			
		/*if(!get_magic_quotes_gpc()){
			$fileName = addslashes($fileName);
			$filePath = addslashes($filePath);
		} */

		$query = "UPDATE usuario SET foto = '$filePath' WHERE usuario = '$usuario'";

		if(mysqli_query($con, $query)){
			header("location: ../vistas/usuarios/adminUsuario.php");
		}else{
			die("Error");
		}

	}

?>