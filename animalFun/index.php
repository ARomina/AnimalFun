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
    <link rel="stylesheet" href="css/estilosMenuPrincipal.css">
    <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
		<?php include("menuPrincipal.php");?>

		<!-- CAROUSEL -->
		<?php include("carousel.php");?>

    <!-- Sección: Rankings, etc. -->

      <!-- ESTE ESTILO INLINE SE TIENE QUE IR DE AHI -->
      <div class="row" style="margin-top: -20px;">
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
                     <table class="divider">
                        <thead>
                           <th>
                              <tr><!-- <h3 class="titulos">Últimas historias publicadas</h3> --></tr>
                           </th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="text-center">
                        <a href="#" class="btn boton">Ver más</a>
                     </div>
                  </div>
                  <div class="col-md-4 text-center">
                     <h3 class="titulos">Ránking de mascotas</h3>
                     <table class="divider">
                        <thead>
                           <th>
                              <tr>
                                 <!-- <h3 class="titulos">Ránking de mascotas</h3> -->
                              </tr>
                              <tr>
                                
                              </tr>
                           </th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/dog-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="text-center">
                        <a href="#" class="btn boton">Ver más</a>
                     </div>
                  </div>
                  <div class="col-md-4 text-center">
                     <h3 class="titulos">Actividad reciente</h3>
                     <table>
                        <thead>
                           <th>
                              <tr><!-- <h3 class="titulos">Actividad reciente</h3> --></tr>
                           </th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/person-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/person-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/person-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                  <div>
                                       <a href="#" class="pull-left">
                                          <img src="img/person-icon.png" class="media-photo">
                                       </a>
                                       <p class="espacio-derecha">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                                 </div>
                              </td>
                           </tr>
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

    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
    </script>
    
   </body>
</html>