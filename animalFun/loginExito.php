<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas-->

<?php

	//Inicializo módulo de sesión
	session_start();
	$usuario = "";

	$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Login Prueba</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/estilos.css">
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body>
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12 col-lg-12">
   				<h2 class="text-center">Bienvenid@, <?php echo $usuario;?></h2>
			</div>
		</div>
	</div>
 		<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>
   </body>
</html>