<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas-->

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - Adopciones</title>
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

   </head>
   <body>
	
    <!-- MENU -->
		<?php include("menuPaginas.php");?>
    <!-- MENU -->

	<!--Jumbo-->
	<!-- Sector buscar mascotas en adopción -->
	<!-- <br/></br></br></br><br/></br></br></br> -->
		<!-- <div class="container"> -->
		    <div class="row">
				<div class="col-md-12 text-center">
	               <h2 class="titulo-central">Chequeá nuestras mascotas en adopción <!-- <i class="fa fa-chevron-down"></i> --></h2>
	            </div>
	    	</div>
			<!-- </br></br></br></br></br>
		  </div> -->
		  
		    <div class="container">
				<div class="row">
					<!-- <div class="col-4 col-sm-4"></div> -->
						<!-- <div class="col-md-4 offset-md-4"> -->
						<div class="col-md-4 col-md-offset-4 divBuscador">
							<form>
								<div class="form-group input-group">
									<input type="text" class="form-control" placeholder="Buscá mascotas en adopción">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										</span>
								</div>
							</form>
						</div>
				</div>
			</div>
			<!-- </div> -->
	<!--./Jumbo-->
	
	<div class="container">
		<div class="row">
		<hr>
			<div class="col-4 col-sm-4" align="center">
				<form>
					<div class="form-group">
	                    <label>Tipo</label>
	                        <select class="form-control">
	                        	<option selected disabled>Seleccioná un tipo de mascota</option>
	                            <option>Perro</option>
	                            <option>Gato</option>
	                            <option>Ave</option>
	                            <option>Pez</option>
	                        </select>
	                </div>
				</form>
			</div>
			<div class="col-4 col-sm-4" align="center">
				<form>
				<div class="form-group">
	                <label>Raza</label>
	                    <select class="form-control">
	                    	<option selected disabled>Seleccioná una raza</option>
	                        <option>Caniche</option>
	                        <option>Ovejero alemán</option>
	                        <option>Bulldog francés</option>
	                        <option>Pequinés</option>
	                        <option>Galgo</option>
	                    </select>
	            </div>
				</form>
			</div>
			<div class="col-4 col-sm-4" align="center">
				<form>
				<div class="form-group">
	                <label>Tamaño</label>
	                    <select class="form-control">
	                    	<option selected disabled>Seleccioná un tamaño</option>
	                        <option>Pequeño</option>
	                        <option>Mediano</option>
	                        <option>Grande</option>
	                    </select>
	             </div>
				</form>
			</div>
		</div>
	</div>

	  <!-- Sector mascotas en adopción -->
        <div class="row divMascotasEnAdopcionOfrecer">
		<hr>
            <div class="col-lg-12 divFotosMascotas" style="margin-left: 5%;">
            	<ul class="fotos-Polaroid fotosMascotas">
	                <a href="" title="Sparkie"><img height="200" src="img/perro1.jpg" alt="Perro - Sparkie" title="Sparkie"/></a>
	                <a href="" title="Oliver"><img height="200" src="img/perro2.jpg" alt="Perro - Oliver" title="Oliver"/></a>
	                <a href="" title="Jason"><img height="200" src="img/perro3.jpg" alt="Perro - Jason" title="Jason"/></a>
	                <a href="" title="Emmet"><img height="200" src="img/perro4.jpg" alt="Perro - Emmet" title="Emme1"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro3.jpg" alt="Perro - Emmet" title="Emmet2"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro2.jpg" alt="Perro - Emmet" title="Emmet3"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro3.jpg" alt="Perro - Emmet" title="Emmet4"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro4.jpg" alt="Perro - Emmet" title="Emmet5"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro2.jpg" alt="Perro - Emmet" title="Emmet6"/></a>
					<a href="" title="Emmet"><img height="200" src="img/perro1.jpg" alt="Perro - Emmet" title="Emmet7"/></a>
				</ul>
            </div>
        </div>
	
		<div class="row">
			<div class="col-6 col-sm-12" align="center">
				<button type="button" class="btn btn-success btn-lg">Ver más</button>
			</div>
			<hr>
		</div>
		
		<div class="container">
			<div class="page-header">
				<h2 align="center" >¿Querés ofrecer una mascota en adopción?</h2> 
			</div>
		    <div class="container">
				<div class="row">
					<div class="col-4 col-sm-4"></div>
					<div class="col-md-4 offset-md-4">
						<button type="button" class="btn btn-outline btn-success btn-lg btn-block">Hacé clic aquí para ofrecer en adopcion</button>
					</div>
				</div>
			</div>
		</div>
				
		<div class="container">
		<hr>
		    <div class="page-header">
				<h2 align="center" >¿Querés ofrecer cachorros?</h2> 
		    </div>
		    <div class="container">
				<div class="row">
					<div class="col-4 col-sm-4"></div>
					<div class="col-md-4 offset-md-4">
						<button type="button" class="btn btn-outline btn-success btn-lg btn-block">Ofrecer cachorros</button>
					</div>
				</div>
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