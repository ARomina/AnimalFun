<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  /*include_once "conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }*/

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
    <link rel="stylesheet" href="../../recursos/css/estilosTableroDeAnuncios.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="titulo-central">Tablero de anuncios <i class="fa fa-newspaper-o" aria-hidden="true" id="iconoTablero"></i></h2>
      </div>
    </div>

    <div class="container" id="contenedorGeneralBody">
      <div class="row display-flex" id="rowAnuncios">
        <div class="col-md-3">
          <div class="thumbnails" id="thumbnail1">
            <img src="../../recursos/img/encuentro.jpg" width="500" height="250" />
              <div class="caption">
                <h4 class="text-center textoAzul titulosTablero">Encontrados / Perdidos</h4>
                <p>¿Perdiste a tu mascota? ¡No dudes en buscarlo en nuestra sección especial!</p>
                <p>¿Encontraste uno? ¡Publicalo! Podés ayudar a que alguien vuelva a ser feliz :)</p>
                <a href="#" class="btn boton3 text-center textoBold botonesTablero" role="button">Ver sección Buscados <i class="fa fa-search" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
         <div class="col-md-3">
           <div class="thumbnails" id="thumbnail2">
            <img src="../../recursos/img/cachorritos2.jpg" width="500" height="250" />
              <div class="caption">
                <h4 class="text-center textoAzul titulosTablero">Ofrecer cachorros</h4>
                <p>¿Tenés cachorritos para ofrecer?</p>
                <p>Publicalos en esta sección para encontrales un nuevo hogar</p>
                <a href="#" class="btn boton3 text-center textoBold botonesTablero" role="button">Ver sección Cachorros <i class="fa fa-paw" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="thumbnails" id="thumbnail3">
            <img src="../../recursos/img/perroadopcion.jpg" width="500" height="250" />
              <div class="caption">
                <h4 class="text-center textoAzul titulosTablero">Adopciones</h4>
                <p>¿Querés un nuevo integrante para tu familia? Buscá entre nuestras mascotas en adopción para encontrarlo/a</p>
                <p>¿Querés ofrecer unamascota en adopción por alguna situación en especial? Publicalo y recibí pedidos</p>
                <a href="#" class="btn boton3 text-center textoBold botonesTablero" role="button">Ver sección Adopciones <i class="fa fa-home" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
         <div class="col-md-3">
           <div class="thumbnails" id="thumbnail4">
            <img src="../../recursos/img/perroromantico.jpg" width="500" height="250" />
              <div class="caption">
                <h4 class="text-center textoAzul titulosTablero">Citas</h4>
                <p>¿Buscándole un novio/a a tu mascota?</p>
                <p>¡Este es el lugar ideal para encontralo/a!</p>
                <a href="#" class="btn boton3 text-center textoBold botonesTablero" role="button">Ver sección Citas <i class="fa fa-heart" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
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