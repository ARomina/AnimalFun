<?php

	/* Materia: Programación Web 2  / UNLaM 2017 
    Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
    Alumnos: Barraza, A. Romina / Miharu, Lucas */

	//session_start(); 
	include_once "../conexion.php"; 

	//Validación de campos
	/*if(isset($_POST['submit'])) 
	{ */
	    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
	    { 
	    	echo "CAMPOS_VACIOS";
	        //echo 'Por favor llene todos los campos.'; 
	    } 
	    else 
	    { 
	   
	        $sql = 'SELECT * FROM `usuario`'; 
	        $rec = mysqli_query($con, $sql); 
	        $verificar_usuario = 0; 
	  
	        while($result = mysqli_fetch_object($rec)) 
	        { 
	            if($result->usuario == $_POST['usuario']) 
	            { 
	                $verificar_usuario = 1; 
	            } 
	        } 
	  
	        if($verificar_usuario == 0) 
	        { 
	            if($_POST['password'] == $_POST['repassword']) 
	            { 
	                $usuario = $_POST['usuario']; 
	                $password = $_POST['password']; 
					$nombre = $_POST['nombre']; 
					$apellido = $_POST['apellido']; 
					$correo = $_POST['correo']; 
	                $sql = "INSERT INTO usuario (usuario,password,nombre,apellido,correo) VALUES ('$usuario', sha1('$password'),'$nombre','$apellido','$correo')";
	                mysqli_query($con, $sql); 
	  
	  				echo "USUARIO_REGISTRADO";
	                //echo "Usted se ha registrado correctamente."; 
	            } 
	            else 
	            { 
	            	echo "CLAVES_NO_IGUALES";
	                //echo 'Las claves no son iguales, intente nuevamente.'; 
	            } 
	        } 
	        else 
	        { 
	        	echo "USUARIO_REGISTRADO_ANTERIORMENTE";
	            //echo 'Este usuario ya ha sido registrado anteriormente.'; 
	        }

	    } 
	//}

?>