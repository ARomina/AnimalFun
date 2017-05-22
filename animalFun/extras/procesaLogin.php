<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas-->

<?php
        
        //Inicio módulo de sesión
        session_start();
        include_once "conexion.php"; 

        //Inicialización de variables
        $usuario = "";
        $password = "";
        $errores = "";

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
        

        //Creo variables de sesión y les asigno lo que recibí por POST
        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $password;

        //TEST: Chequear si el usuario es --> LAURA 123456 o LUIS 567899
        if((($usuario == "LAURA") && ($password == "123456")) || (($usuario == "LUIS") && ($password == "567899"))){
            $data = "OK";
            echo $data;
        }else{
            $data = "ERROR";
            echo $data;
        }
    ?>