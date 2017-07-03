<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "conexion.php";

  include_once "extras/funcionHaceCuantoTiempo.php";

  session_start();

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="recursos/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="recursos/img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="recursos/css/bootstrap.css">

    <!-- Bootstrap Core CSS -->
    <link href="recursos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="recursos/css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="recursos/css/estilosMenuPrincipal.css">
    <link href="recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
		<?php include("vistas/menuPaginas.php");?>

		<!-- CAROUSEL -->
		<?php include("extras/carousel.php");?>

    <!-- Sección: Rankings, etc. -->
    <div class="wrap">
      <div class="row" style="margin-top: -20px;" id="rowGeneralBody">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">¡Mirá las mascotas más populares y la actividad en nuestra red! <i class="fa fa-chevron-down"></i></h2>
            </div>
         </div>
         <div class="container">
            <div class="row">
            <div class="col-md-12" id="div-tablas">
               <div class="row">
                  <div class="col-md-4 text-center" >
                    <h3 class="titulos">Últimas historias publicadas</h3>
            <!-- Table con colores -->
                     <!--<table class="divider tablaIzquierda">
                        <thead>
                          <th>
                              <tr><h3 class="titulos">Últimas historias publicadas</h3></tr>
                           </th>
                        </thead>
                        <tbody id="tbody">
                          <?php //include("extras/verHistoriasRecientes.php");?>
                        </tbody>
                      </table>-->
            <!-- Table comun -->
                      <table class="table table-striped">
                        <thead>
                          <!--  <th>
                              <tr><h3 class="titulos">Últimas historias publicadas</h3></tr>
                           </th> -->
                        </thead>
                        <tbody>
                          <?php include("extras/verHistoriasRecientes.php");?>
                        </tbody>
                      </table>          
                    <div class="text-center">
                      <a href="#" class="btn boton">Ver más</a>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                     <h3 class="titulos">Ránking de mascotas</h3>
              <!-- Table con colores -->
                     <!-- <table class="divider tablaCentral">
                        <thead>
                          <th>
                              <tr>
                                 <h3 class="titulos">Ránking de mascotas</h3>
                              </tr>
                              <tr>
                              </tr>
                           </th> 
                        </thead>
                        <tbody>
                           <?php //include("extras/verRankingIndex.php");?>
                        </tbody>
                     </table>-->
              <!-- Table comun -->
                      <table class="table table-striped">
                        <thead>
                          <!--  <th>
                              <tr><h3 class="titulos">Últimas historias publicadas</h3></tr>
                           </th> -->
                        </thead>
                        <tbody>
                          <?php include("extras/verRankingIndex.php");?>
                        </tbody>
                      </table>   
                     <div class="text-center">
                        <a href="vistas/secciones/ranking.php" class="btn boton">Ver más</a>
                     </div>
                  </div>
                  <div class="col-md-4 text-center">
                     <h3 class="titulos">Actividad reciente</h3>
              <!-- Table con colores -->
                      <!-- <table class="tablaDerecha">
                        <thead>
                           <th>
                              <tr><h3 class="titulos">Actividad reciente</h3></tr>
                           </th>
                        </thead>
                        <tbody>
                           <?php //include("extras/verActividadReciente.php");?>
                        </tbody>
                     </table>-->
              <!-- Table comun -->
                      <table class="table table-striped">
                        <thead>
                          <!--  <th>
                              <tr><h3 class="titulos">Últimas historias publicadas</h3></tr>
                           </th> -->
                        </thead>
                        <tbody>
                          <?php include("extras/verActividadReciente.php");?>
                        </tbody>
                      </table>   
                     <div class="text-center">
                        <a href="#" class="btn boton">Ver más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div><!-- div container -->
    </div><!-- div wrapper -->

    <div id="push"></div>

   <!--  </div> -->

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

      <script type="text/javascript" src="recursos/js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="recursos/js/bootstrap.js"></script>
	    <script type="text/javascript" src="recursos/js/carousel.js"></script>

       <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
    </script>	
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
    
   </body>
</html>