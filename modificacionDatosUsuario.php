<?php

	/* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  	include_once "../conexion.php";

  	session_start();

  	//if(isset($_SESSION['usuario'])){
  		$usuario = $_SESSION['usuario'];
  	//}
  
  	//Inicialización de variables
  	$nombre = "";
  	$apellido = "";
  	$correo = "";
  	$telefono = "";
  	$sexo = "";
  	$fechaPartes = "";
  	$fechaNac = "";
  	$errores = "";

  	//Recibo y valido datos; asigno a variables
  	if(isset($_POST['nombre'])){
  		if(preg_match('/^[a-zA-Z]+$/', $_POST['nombre'])){
  			$nombre = $_POST['nombre'];
  		}else{
  			 $errores .= "<p class='alerta'>El nombre sólo puede contener letras</p>";
  		}
  	}

  	if(isset($_POST['apellido'])){
  		if(preg_match('/^[a-zA-Z]+$/', $_POST['apellido'])){
  			$apellido = $_POST['apellido'];
  		}else{
  			 $errores .= "<p class='alerta'>El apellido sólo puede contener letras</p>";
  		}
  	}

  	if(isset($_POST['correo'])){
  		if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
  			$correo = $_POST['correo'];
  		}else{
  			 $errores .= "<p class='alerta'>El correo debe tener un formato válido</p>";
  		}
  	}

  	if(isset($_POST['telefono'])){
  		if(preg_match('/^[0-9]+$/', $_POST['telefono'])){
  			$telefono = (int)$_POST['telefono'];
  		}else{
  			 $errores .= "<p class='alerta'>El teléfono sólo puede contener números</p>";
  		}
  	}

  	if(isset($_POST['sexo'])){
  		$sexo = $_POST['sexo'];
  	}else{
  			$errores .= "<p class='alerta'></p>";
  	}

  	if(isset($_POST['fechaNac'])){

  	  //Para que lo recibido se arme en el formato en que lo guarda la base
  	  $fechaPartes = explode('/', $_POST['fechaNac']);
        $fechaNac  = date("$fechaPartes[2]-$fechaPartes[0]-$fechaPartes[1]");
  	}else{
  		$errores .= "<p class='alerta'>La fecha debe ser del formato indicado</p>";
  	}


  //Query
 	$sql = "UPDATE usuario u SET nombre = ?, apellido = ?, correo = ?, telefono = ?, sexo = ?, fechaNac = ? WHERE u.usuario = ?";

 	//Preparo la query
    if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('sssisss', $nombre, $apellido, $correo, $telefono, $sexo, $fechaNac, $usuario);
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