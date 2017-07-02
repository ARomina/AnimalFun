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
	$fotoMascota = "";
	$nombre = "";
	$tipo = "";
	$raza = "";
	$tamano = "";
	$sexo = "";
	$caracteristicas = "";
	
	//Validaciones

    //Para subir la imagen a la carpeta especificada
    $uploadDir = '../recursos/img/fotosMascota/';
                        
    $fileName = $_FILES['fotoMascota']['name'];
    $fileType = $_FILES['fotoMascota']['type'];
    $tmpName = $_FILES['fotoMascota']['tmp_name'];
                                
    $filePath = $uploadDir . $fileName;
    $resultado = move_uploaded_file($tmpName, $filePath);
                            
    if(!$resultado){
        echo "Error al subir la imagen";
    }

    $fotoMascota = $filePath;

    //Si existe y si no es vacío --> valido y asigno a variable
    if((isset($_POST['nombre'])) && (!empty($_POST['nombre']))){
        $nombre = $_POST['nombre'];
    }else{
        $errores .= "<p class='alerta'>El nombre no puede estar vacío y debe tener solo letras y espacios</p>";
    }

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }else{
        $errores .= "<p class='alerta'></p>";
    }

    if(isset($_POST['raza'])){
        $raza = $_POST['raza'];
    }else{
        $errores .= "<p class='alerta'></p>";
    }

    if(isset($_POST['tamano']) && (!empty($_POST['tamano']))){
        $tamano = $_POST['tamano'];
    }else{
        $errores .= "<p class='alerta'>Debe elegir un tamaño para la mascota</p>";
    }

    if(isset($_POST['sexo']) && (!empty($_POST['sexo']))){
        $sexo = $_POST['sexo'];
    }else{
        $errores .= "<p class='alerta'>Debe elegir un sexo para la mascota</p>";
    }

    if(isset($_POST['caracteristicas'])){
        $caracteristicas = $_POST['caracteristicas'];
    }else{
        $errores .= "<p class='alerta'></p>";
    }


    //Ingreso la mascota nueva
    $stmt = $con->prepare("INSERT INTO mascota (usuario, nombre, tipo, tamano, raza, sexo, foto, caracteristicas) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param('isiiiiss', $id, $nombre, $tipo, $tamano, $raza, $sexo, $fotoMascota, $caracteristicas);

    $stmt->execute();

    $filasAfectadas = $stmt->affected_rows;

    if($filasAfectadas > 0){
    	echo "REGISTRO EXITOSO";
    }else{
    	echo "NO SE REGISTRO";
    }

    $con->close();

?>