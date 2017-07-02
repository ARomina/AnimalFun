<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
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
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
  
    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

      
    <!-- Sección -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mis mascotas que buscan cita</h2>
            </div>
      </div>

      <div class="row">
          <div class="col-md-12">
            <br>
              <div class="divFotosMascotas">
                    <ul class="fotos-Polaroid fotosMascotas">
                      <?php include("../../extras/verMascotasBuscandoCitaUsuario.php");?>
                    </ul>
                </div>
                <br>
            </div>
        </div>

         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mis mascotas citadas</h2>
            </div>
      </div>

      <div class="row">
          <div class="col-md-12">
            <br>
              <div class="divFotosMascotas">
                    <ul class="fotos-Polaroid fotosMascotas">
                      <?php include("../../extras/verMascotasCitadasUsuario.php");?>
                    </ul>
                </div>
                <br>
            </div>
        </div>
    
      <!--</div>--><!-- div container -->

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