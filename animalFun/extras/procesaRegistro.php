

<?php

	//session_start(); 
	include_once "../conexion.php"; 
	$data = "";

	//Validación de campos
	/*if(isset($_POST['submit'])) 
	{ */
	    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '')
	    { 
	        echo 'Por favor llene todos los campos.'; 
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
	                $sql = "INSERT INTO usuario (usuario,password,nombre,apellido,correo) VALUES ('$usuario','$password','$nombre','$apellido','$correo')";
	                mysqli_query($con, $sql); 
	  
	  				$data = "Usted se ha registrado correctamente.";
	  				echo $data;
	                //echo "Usted se ha registrado correctamente."; 
	            } 
	            else 
	            { 
	            	//$data = "ERROR";
	            	//echo $data;
	                echo 'Las claves no son iguales, intente nuevamente.'; 
	            } 
	        } 
	        else 
	        { 
	        	//$data = "ERROR";
	        	//echo $data;
	            echo 'Este usuario ya ha sido registrado anteriormente.'; 
	        }

	    } 
	//}

?>