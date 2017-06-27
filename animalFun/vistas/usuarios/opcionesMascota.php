<?php

  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }

  $idMascota = $_GET['idMascota'];

  //Query para traer el nombre de la mascota
  $sql = "SELECT nombre, foto from mascota WHERE id = '$idMascota'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $nombre = $row['nombre'];
        $foto = $row['foto'];
    }


?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="../../recursos/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../../recursos/img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../../recursos/css/bootstrap.css">

    <!-- Bootstrap Core CSS -->
    <link href="../../recursos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../recursos/css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilos.css">
    <link rel="stylesheet" href="../../recursos/css/estilosMenuPaginas.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link rel="stylesheet" href="../../recursos/css/estilosFotosBootstrap.css">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

     <!-- Sección -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mi mascota: <?php echo $nombre;?></h2>
            </div>
      </div>

      <!--<div class="container">-->

      <div class="container" id="contenedorGeneralBody">
        <div class="row">
          <div class="col-md-12 text-center">
              <br>
                      <a class="btn boton2" style="padding: 10px; margin: 10px;" href="verTodosDatosMascota.php?idMascota=<?php echo $idMascota;?>">Ver datos de mi mascota</a>
                      <a class="btn boton2" style="padding: 10px margin: 10px;" href="modifDatosMascota.php?idMascota=<?php echo $idMascota;?>">Editar datos de mi mascota</a>
                      <a class="btn boton2" style="padding: 10px; margin: 10px;" href="generarQRMascota.php?idMascota=<?php echo $idMascota;?>">Generar QR para mi mascota</a>
                      <a class="btn boton2" style="padding: 10px; margin: 10px;" href="verPerfilMascota.php?idMascota=<?php echo $idMascota;?>">Ver perfil de mi mascota</a>
              <br>
            </div>
        </div>
      </div><!-- container -->

      </div><!-- div wrap -->

      <div id="push"></div>

    <!-- FOOTER -->
    <div class="row" id="div-footer">
      <div class="col-xs-12 col-sm-12 col-md-4" id="footer-izquierda">
        <p class="textoBoldBlanco">¿Preguntas, dudas? ¡Hacé click <a href="#">aquí</a>!</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4" id="footer-centro">
        <p class="textoBoldBlanco">Programación Web 2</p>
      </div>
    </div>
    <!-- FOOTER -->

    <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="../../recursos/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../recursos/js/carousel.js"></script>
  
			<script>
			  $("#menu-close").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		  });
		  $("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		  });
			</script>
       <!-- /.container -->

   </body>
</html>