<?php

    /* Materia: Programación Web 2  / UNLaM 2017 
    Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
    Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */
        
        include_once "../conexion.php";
        
        //Inicio módulo de sesión
        session_start(); 

        //Inicialización de variables
        $usuario = "";
        $password = "";
        $id = "";
        $nombre = "";
        $apellido = "";
        $correo = "";
        $sexo = "";
        $telefono = "";
        $posicion = "";
        $fotoPerfiUsuario = "";

        $errores = "";
        //$resultado = "";
        //$resultado2 = "";
        //$check_password = "";

        //Validaciones

        //Si existe y si no es vacío --> valido y asigno a variable
        if((isset($_POST['usuario'])) && (!empty($_POST['usuario']))){
            $usuario = $_POST['usuario'];
        }else{
            $errores .= "<p class='alerta'>El usuario no puede estar vacío y debe tener solo letras y números, entre 4 y 10 caracteres</p>";
        }
        

         //Si existe y si no es vacío --> valido y asigno a variable
        if((isset($_POST['password'])) && (!empty($_POST['password']))){
                $password = $_POST['password'];
            }else{
                $errores .= "<p class='alerta'>La contraseña puede estar vacía y debe tener solo letras y números, entre 6 y 8 caracteres</p>";
            }

        
       //Comprobación

       //Armo la query
       $sql = "SELECT id, nombre, apellido, correo, sexo, telefono, fechaNac, posicion, foto FROM usuario WHERE BINARY usuario = ? AND password = sha1(?)";

        //Preparo la query
        if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('ss', $usuario, $password);
            $stmt->bind_result($id, $nombre, $apellido, $correo, $sexo, $telefono, $fechaNac, $posicion, $fotoPerfilUsuario);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

                while($stmt->fetch()){
                    //Si existe seteo las variables de sesión
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] = $id;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['correo'] = $correo;
                    $_SESSION['sexo'] = $sexo;
                    $_SESSION['telefono'] = $telefono;
                    $_SESSION['fechaNac'] = $fechaNac;
                    $_SESSION['posicion'] = $posicion;
                    $_SESSION['foto'] = $fotoPerfilUsuario;
                }
                echo "USUARIO VALIDO";
            }else{
                echo "USUARIO INCORRECTO";
            }
               
        }

?>