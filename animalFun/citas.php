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

    <div id="wrap">
	<!--Jumbo-->
	<!-- <br/></br></br></br><br/></br></br></br> -->
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-md-12 text-center">
          		<h2 class="titulo-central">Encuentros<!--  <i class="fa fa-chevron-down"></i> --></h2>
       		</div>
		<!-- 	</br></br></br></br></br> -->
		</div>

			<!-- 	</div> -->
	<!--./Jumbo-->

		<div class="container">
		</br></br>
       		<div class="panel panel-default">
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills">
                        <li class=""><a href="#home-pills" data-toggle="tab" aria-expanded="false">Ofrecer</a></li>
                        <li class=""><a href="#profile-pills" data-toggle="tab" aria-expanded="false">Buscar</a></li>
                    </ul>

                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="home-pills">
                                <h4>Formulario para postularse a una cita</h4>
								<form class="sa-innate-form" action="" method="POST">
									<div class="row">
										<div class="col col-md-12">
											<label for="tipo" class="control-label">Quien se ofrece </label>
												<select name="search[breed_id]">
													<option value="all">Seleccione</option>
													<option value="1">raza 1</option>
													<option value="2">raza 2</option>
													<option value="3">raza 3</option>
													<option value="4">raza 4</option>
												</select>
										</div>
										<div class="col col-md-6">
											<label for="tipo" class="control-label">Raza </label>
												<select name="search[breed_id]">
													<option value="all">Todas</option>
													<option value="1">raza 1</option>
													<option value="2">raza 2</option>
													<option value="3">raza 3</option>
													<option value="4">raza 4</option>
												</select>
											 
										</div>
										<div class="col col-md-6">
											<label class="control-label" for="gender">Genero</label>
											<div class="controls">
												<select name="search[gender]">
													<option value="all">Cualquiera</option>
													<option value="m">Perro (Masc)</option>
													<option value="f">Perra (Fem)</option>
												</select>
											</div>
										</div>
										<div class="col col-md-6">
											<label class="control-label" for="distance">Distancia</label>
											<div class="controls">
												<select name="search[distance]">
													<option value="all">Cualquiera</option>
													<option value="5">5 km</option>
													<option value="10">10 km</option>
												</select>
											</div>
										</div>
										<div class="col col-md-12">
											<textarea class="form-control" rows="10"></textarea>
										</div>
										<div class="col col-md-3">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">Busca tener cachorros?
												</label>
											</div>
										</div>
										<div class="col col-md-3">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">Busca tener hacer amigos?
												</label>
											</div>
										</div>
										<div class="col col-md-3">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">tuvo cachorros ya?
												</label>
											</div>
										</div>
										<div class="col col-md-3">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">puede movilizarse?
												</label>
											</div>
										</div>
									</div>
									
									<div class="col col-md-12">
										<button class="btn btn-primary pull-right" data-loading="Searching...">Ofrecer</button>
									</div>
								</form>
							</div>
							<div class="tab-pane fade" id="profile-pills">
                                <h4>Formulario para Buscar una cita</h4>
									<form class="sa-innate-form" action="" method="POST">
                                        <input type="hidden" name="search[listing_type]" value="dog">
											<div class="row">
												<div class="col col-md-12">
													<label for="tipo" class="control-label">Quien se Busca </label>
													<select name="search[breed_id]">
														<option value="all">Seleccione</option>
														<option value="1">raza 1</option>
														<option value="2">raza 2</option>
														<option value="3">raza 3</option>
														<option value="4">raza 4</option>
													</select>
															 
												</div>
												<div class="col col-md-6">
													<label for="tipo" class="control-label">Raza </label>
													<select name="search[breed_id]">
														<option value="all">Todas</option>
														<option value="1">raza 1</option>
														<option value="2">raza 2</option>
														<option value="3">raza 3</option>
														<option value="4">raza 4</option>
													</select>
												</div>
												<div class="col col-md-6">
													<label class="control-label" for="gender">Genero</label>
														<div class="controls">
															<select name="search[gender]">
																<option value="all">Cualquiera</option>
																<option value="m">Perro (Masc)</option>
																<option value="f">Perra (Fem)</option>
															</select>
														</div>
												</div>
												<div class="col col-md-6">
													<label class="control-label" for="distance">Distancia</label>
														<div class="controls">
															<select name="search[distance]">
																<option value="all">Cualquiera</option>
																<option value="5">5 km</option>
																<option value="10">10 km</option>
															</select>
														</div>
												</div>
												<div class="col col-md-12">
													<textarea class="form-control" rows="10"></textarea>
												</div>
												<div class="col col-md-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Busca tener cachorros?
														</label>
													</div>
												</div>
												<div class="col col-md-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Busca tener hacer amigos?
														</label>
													</div>
												</div>
												<div class="col col-md-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">tuvo cachorros ya?
														</label>
													</div>
												</div>
												<div class="col col-md-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">puede movilizarse?
														</label>
													</div>
												</div>
												<div class="col col-md-12">
													<button class="btn btn-primary pull-right" data-loading="Searching...">Buscar</button>
												</div>
											</div>
									</form>
							</div>
						</div><!-- div del tab content -->
					</div><!-- div del panel-body -->
            </div><!-- div del panel -->
    </div><!-- Deberia ser el del container -->
</div><!-- Deberia ser el del wrap -->
                        <!-- /.panel-body -->

               
        <div id="push"></div>

<!-- Fin registro -->	
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

   <!--  <div> -->

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
    <script>
    $('#hembra').click(function () {
    var checked = this.checked;
    console.log(checked);
    $('.hembra').each(function () {
        $(this).prop('disabled', !checked);
    });
});
    </script>
    <script>
    $('#macho').click(function () {
    var checked = this.checked;
    console.log(checked);
    $('.macho').each(function () {
        $(this).prop('disabled', !checked);
    });
});
    </script>
 <script>
    $('#propio').click(function () {
    var checked = this.checked;
    console.log(checked);
    $('.propio').each(function () {
        $(this).prop('disabled', !checked);
    });
});
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