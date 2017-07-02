<?php

	/* Materia: Programación Web 2  / UNLaM 2017 
    Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
    Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

	//session_start(); 
	include_once "../conexion.php"; 

	//Inicio módulo de sesión
    session_start();

    if(isset($_SESSION['id'])){
    	$id = $_SESSION['id'];
    }

	//Inicializo variables
	$idMascota = "";
	$contenidoPost = "";
	$fotoPost = "";
	//$videoPost = "";

	$idMascota = $_POST['idMascota'];

	//Si existe y si no es vacío --> valido y asigno a variable
    if((isset($_POST['contenidoPost'])) && (!empty($_POST['contenidoPost']))){
        $contenidoPost = $_POST['contenidoPost'];
    }

    //Si existe y si no es vacío --> valido y asigno a variable
    if((isset($_FILES['fotoPost']['name'])) && (!empty($_FILES['fotoPost']['name']))){
       
    	$uploadDir = '../recursos/img/fotosPost/';

    	$fileName = $_FILES['fotoPost']['name'];
		$tmpName = $_FILES['fotoPost']['tmp_name'];
		$fileSize = $_FILES['fotoPost']['size'];
		$fileType = $_FILES['fotoPost']['type'];

		$filePath = $uploadDir . $fileName;
		$resultado = move_uploaded_file($tmpName, $filePath);
		if(!$resultado){
			echo "Error al subir la imagen";
			$filePath = "";
		}

    }else{
    	$fotoPost = "";
    }

    //Si existe y si no es vacío --> valido y asigno a variable
    if((isset($_POST['videoPost'])) && (!empty($_POST['videoPost']))){
        //$videoPost = $_POST['videoPost'];
        
    }else{
        $videoPost = "";
    }

    if($filePath == ""){
        $adjunto = $videoPost;
    }else{
        $adjunto = $filePath;
    }


    //Para agarrar la fecha y hora del posteo
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaHora = date('Y-m-d H:i:s');
/*
    echo $idMascota;
    echo $contenidoPost;
    echo $adjunto;
    echo $fechaHora;*/
    //Ingreso el nuevo posteo
    $stmt = $con->prepare("INSERT INTO post (mascota, contenido, adjunto, fechaHora) VALUES (?, ?, ?, ?)");

    $stmt->bind_param('isss', $idMascota, $contenidoPost, $adjunto, $fechaHora);

    $stmt->execute();

    $filasAfectadas = $stmt->affected_rows;

    if($filasAfectadas > 0){
    	echo "OK";
    }else{
    	echo "ERROR";
    }

    $con->close();





?>