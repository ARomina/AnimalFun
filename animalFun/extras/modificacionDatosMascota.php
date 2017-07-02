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
	$nombre = "";
	$tipo = "";
	$raza = "";
	$tamano = "";
	$sexo = "";
    $estado = "";
	$caracteristicas = "";

    $idMascota = $_POST['idMascota'];
	
	//Validaciones

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

    if(isset($_POST['estado']) && (!empty($_POST['estado']))){
        $estado = $_POST['estado'];
    }else{
        $errores .= "<p class='alerta'>Debe elegir un estado para la mascota</p>";
    }

    if(isset($_POST['caracteristicas'])){
        $caracteristicas = $_POST['caracteristicas'];
    }else{
        $errores .= "<p class='alerta'></p>";
    }


    //Actualizo los datos
    $sql = "UPDATE mascota m SET nombre = ?, tipo = ?, tamano = ?, raza = ?, sexo = ?, estado = ?, caracteristicas = ? WHERE m.id = ?";

    //Preparo la query
    if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('siiiiisi', $nombre, $tipo, $tamano, $raza, $sexo, $estado, $caracteristicas, $idMascota);
            $stmt->execute();
            //$stmt->store_result();

            //Verifico si se modifico alguna fila 
            $filasModificadas = $stmt->affected_rows;
        
            //Cierro la conexion
            $stmt->close();
    }

    //Verificación
    if($filasModificadas > 0){
        echo "OK";
    }else{
        echo "ERROR";
    }

?>