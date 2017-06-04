<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas */

  include_once "conexion.php";

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
   <!--    <link rel="stylesheet" href="css/estilos.css"> -->
<!--       <link rel="stylesheet" href="css/components.css"> -->
<!--       <link rel="stylesheet" href="css/responsee.css"> -->
     
     <!--  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> -->
      <!-- CUSTOM STYLE -->  
     <!--  <link rel="stylesheet" href="css/template-style.css"> -->
     <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
     <!--  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> -->
      <!-- <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>    -->
   
   <!--  <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosMenuPaginas.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosPerfilUsuario.css">
    <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
  
    <!-- MENU -->
    <?php include("menuPaginas.php");?>

    <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Perfil de <?php echo $_SESSION['usuario'];?></h2>
            </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div id="fotoPerfil" class="divCirculo"></div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default panelDatos">
              <div class="panel-heading headingPanel">
                <h3 class="panel-title"><i class="fa fa-address-card-o" aria-hidden="true"></i> Mis datos de contacto</h3>
              </div>
              <div class="panel-body">
                <p><i class="fa fa-location-arrow" aria-hidden="true"></i> dsafhkjghkba 2543</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> safsadg@fsdgs.com</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 42352454</p>
                <p><i class="fa fa-birthday-cake" aria-hidden="true"></i> 12/44/2343</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default panelDatos">
              <div class="panel-heading  headingPanel">
                <h3 class="panel-title"><i class="fa fa-map-marker" aria-hidden="true"></i> Mi ubicación</h3>
              </div>
              <div class="panel-body">
                <img src="img/mapa.jpg" alt="" class="img-responsive center-block" />
              </div>
            </div>
          </div>
        </div>
      </div><!-- div container -->

        <!-- Sector mascotas del dueño -->
        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mascotas de {dueño}</h2>
            </div>
            <div class="col-lg-12 divFotosMascotas">
              <ul class="fotos-Polaroid fotosMascotas">
                <a href="" title="Sparkie"><img height="200" src="img/perro1.jpg" alt="Perro - Sparkie" title="Sparkie"/></a>
                <a href="" title="Oliver"><img height="200" src="img/perro2.jpg" alt="Perro - Oliver" title="Oliver"/></a>
                <a href="" title="Jason"><img height="200" src="img/perro3.jpg" alt="Perro - Jason" title="Jason"/></a>
                <a href="" title="Emmet"><img height="200" src="img/perro4.jpg" alt="Perro - Emmet" title="Emmet"/></a>
              </ul>
            </div>
        </div>
       

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
       <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script>
 -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
   </body>
</html>