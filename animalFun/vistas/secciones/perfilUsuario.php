<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas */
  include_once "../../conexion.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Bootstrap Core CSS -->
    <link href="../../recursos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../recursos/css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilos.css">
    <link rel="stylesheet" href="../../recursos/css/estilosMenuPaginas.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
  
    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

    <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Perfil de <?php echo $_SESSION['usuario'];?></h2>
            </div>
      </div>
      <div class="container">
        <div class="row">
       <!--   <div class="col-lg-4">
            <div id="fotoPerfil" class="divCirculo"></div>
          </div> -->
          <div class="col-lg-4">
            <div class="panel panel-default panelDatos">
              <div class="panel-heading headingPanel">
                <h3 class="panel-title"><i class="fa fa-address-card-o" aria-hidden="true"></i> Mis datos de contacto</h3>
              </div>
              <div class="panel-body">
        <?php include("../../extras/verUsuario.php"); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default panelDatos">
              <div class="panel-heading  headingPanel">
                <h3 class="panel-title"><i class="fa fa-map-marker" aria-hidden="true"></i> Mi ubicación</h3>
              </div>
              <div class="panel-body">
                <img src="../../recursos/img/mapa.jpg" alt="" class="img-responsive center-block" />
              </div>
            </div>
          </div>
        </div>
      </div><!-- div container -->

        <!-- Sector mascotas del dueño -->
        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mascotas de <?php echo $_SESSION['usuario'];?></h2>
            </div>
            <div class="col-lg-12 divFotosMascotas">
              <ul class="fotos-Polaroid fotosMascotas">
        <?php include("../../extras/verMascotasUsuario.php"); ?>
         
              </ul>
            </div>
        </div>

    </div><!-- div wrapper -->

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
      <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>  
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