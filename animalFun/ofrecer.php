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
    <link rel="stylesheet" href="css/estilosPerfilUsuario.css">
    <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
	
    <!-- MENU -->
		<?php include("menuPaginas.php");?>
    <!-- MENU -->
	<!--Jumbo-->
	<!-- <br/></br></br></br><br/></br></br></br> -->
		<!-- <div class="container"> -->
		  <div class="row">
			  <div class="col-md-12 text-center">
          <h2 class="titulo-central">Querés ofrecer una mascota en adopción?<!--  <i class="fa fa-chevron-down"></i> --></h2>
        </div>
		<!-- 	</br></br></br></br></br> -->
		  </div>
		  
		  <div class="container">
				<div class="row">
				<!-- 	<div class="col-4 col-sm-4"></div>
						<div class="col-md-4 offset-md-4"> -->
            <div class="col-md-4 col-md-offset-4">
							<h3>Seleccioná la/s que quieras </h3>
						</div>
				</div>
			</div>
			<!-- 	</div> -->
	<!--./Jumbo-->

	  <!-- Sector mascotas del dueño -->
        <div class="row divMascotasEnAdopcionOfrecer">
		    <hr>
            <div class="col-lg-12 divFotosMascotas">
              <ul class="fotos-Polaroid fotosMascotas">
                <a href="" title="Sparkie"><img height="200" src="img/perro1.jpg" alt="Perro - Sparkie" title="Sparkie"/><p><br><button type="button" class="btn btn-outline btn-info">Ofrecer</button></p></a>
                <a href="" title="Oliver"><img height="200" src="img/perro2.jpg" alt="Perro - Oliver" title="Oliver"/><p><br><button type="button" class="btn btn-outline btn-info">Ofrecer</button></p></a>
                <a href="" title="Jason"><img height="200" src="img/perro3.jpg" alt="Perro - Jason" title="Jason"/><p><br><button type="button" class="btn btn-outline btn-info">Ofrecer</button></p></a>
                <a href="" title="Emmet"><img height="200" src="img/perro4.jpg" alt="Perro - Emmet" title="Emme1"/><p><br><button type="button" class="btn btn-outline btn-info">Ofrecer</button></p></a>
				       <!--  <a href="" title="Emmet"><img height="200" src="img/perro3.jpg" alt="Perro - Emmet" title="Emme1"/><p><br><button type="button" class="btn btn-outline btn-info">Ofrecer</button></p></a> -->
				      </ul>
			      </div>
        </div>
	
		  <div class="page-header">
			  <h1 align="center" >Mis mascotas en adopción </h1> 
		  </div>
		  
				<!-- Sector mascotas del dueño -->
        <div class="row divMascotasEnAdopcionOfrecer">
            <div class="col-lg-12 divFotosMascotas">
              <ul class="fotos-Polaroid fotosMascotas">
                <a href="" title="Pancho"><img height="200" src="img/adopcion1.jpg" alt="Perro - Sparkie1"roletitle="Sparkie"/><p><br><button type="button" class="btn btn-outline btn-warning">Dejar de ofrecer</button></p></a>
                <a href="" title="Señor gato"><img height="200" src="img/adopcion2.jpg" alt="Perro - Oliver1" title="Oliver"/><p><br><button type="button" class="btn btn-outline btn-warning">Dejar de ofrecer</button></p></a>
                <a href="" title="Panchito"><img height="200" src="img/adopcion3.jpg" alt="Perro - Jason1" title="Jason"/><p><br><button type="button" class="btn btn-outline btn-warning">Dejar de ofrecer</button></p></a>
              </ul>
			      </div>
        </div>
					
<!-- 	</br></br> -->
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