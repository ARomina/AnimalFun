<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

    //Array de TIPOS de mascota
    $tiposMascota = array();

 	//Query TIPO de mascota
	$sql = "SELECT * FROM tipo";
	$resultado = $con->query($sql);

	if($resultado->num_rows > 0){
		$i = 0;
		while($row = $resultado->fetch_assoc()){
			$tiposMascota[$i]['id'] = $row["id"];
			$tiposMascota[$i]['descripcion'] = $row["descripcion"];
			$i++;
		}
	}

	//Array de RAZAS de mascota
	$razasMascota = array();

 	//Query TIPO de mascota
	$sql = "SELECT * FROM raza";
	$resultado = $con->query($sql);

	if($resultado->num_rows > 0){
		$i = 0;
		while($row = $resultado->fetch_assoc()){
			$razasMascota[$i]['id'] = $row["id"];
			$razasMascota[$i]['descripcion'] = $row["descripcion"];
			$i++;
		}
	}

	//Array de TAMAÑOS de mascota
	$tamanosMascota = array();

 	//Query TIPO de mascota
	$sql = "SELECT * FROM tamano";
	$resultado = $con->query($sql);

	if($resultado->num_rows > 0){
		$i = 0;
		while($row = $resultado->fetch_assoc()){
			$tamanosMascota[$i]['id'] = $row["id"];
			$tamanosMascota[$i]['descripcion'] = $row["descripcion"];
			$i++;
		}
	}

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - Adopciones</title>
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

   </head>
   <body>
	
    <!-- MENU -->
		<?php include("../../vistas/menuPaginas.php");?>

	<!-- Sector buscar mascotas en adopción -->
		    <div class="row">
				<div class="col-md-12 text-center">
	               <h2 class="titulo-central">Chequeá nuestras mascotas en adopción <!-- <i class="fa fa-chevron-down"></i> --></h2>
	            </div>
	    	</div
		  
		    <div class="container">
				<div class="row">
					<!-- <div class="col-4 col-sm-4"></div> -->	
				</div>
			</div>
	
	<div class="container">
		<div class="row">
		<hr>
			<div class="col-4 col-sm-4" align="center">
				<form>
					<div class="form-group">
	                    <label>Tipo</label>
	                        <select class="form-control">
	                            <?php
							        $cantTiposMascota = count($tiposMascota);
							   		if($cantTiposMascota > 0){
							   			echo '<option value="0" disabled="disabled" selected="selected">Seleccione un tipo</option>';
							   			for($i=0; $i<$cantTiposMascota; $i++){
								   			echo '<option value="'.$tiposMascota[$i]['id'].'">'.$tiposMascota[$i]['descripcion'].'</option>';
							        	}
							        }else{
							        	echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
							        }
							    ?>
	                        </select>
	                </div>
				</form>
			</div>
			<div class="col-4 col-sm-4" align="center">
				<form>
				<div class="form-group">
	                <label>Raza</label>
	                    <select class="form-control">
	                    	<?php
							    $cantRazasMascota = count($razasMascota);
							   	if($cantRazasMascota > 0){
							   		echo '<option value="0" disabled="disabled" selected="selected">Seleccione una raza</option>';
							   		for($i=0; $i<$cantRazasMascota; $i++){
								   		echo '<option value="'.$razasMascota[$i]['id'].'">'.$razasMascota[$i]['descripcion'].'</option>';
							        }
							    }else{
							        echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
							    }
							?>
	                    </select>
	            </div>
				</form>
			</div>
			<div class="col-4 col-sm-4" align="center">
				<form>
				<div class="form-group">
	                <label>Tamaño</label>
	                    <select class="form-control">
	                    	<?php
							    $cantTamanosMascota = count($tamanosMascota);
							   	if($cantTamanosMascota > 0){
							   		echo '<option value="0" disabled="disabled" selected="selected">Seleccione un tamaño</option>';
							   		for($i=0; $i<$cantTamanosMascota; $i++){
								   		echo '<option value="'.$tamanosMascota[$i]['id'].'">'.$tamanosMascota[$i]['descripcion'].'</option>';
							        }
							    }else{
							        echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
							    }
							?>
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
	                <a href="" title="Sparkie"><img height="200" src="../../recursos/img/perro1.jpg" alt="Perro - Sparkie" title="Sparkie"/></a>
	                <a href="" title="Oliver"><img height="200" src="../../recursos/img/perro2.jpg" alt="Perro - Oliver" title="Oliver"/></a>
	                <a href="" title="Jason"><img height="200" src="../../recursos/img/perro3.jpg" alt="Perro - Jason" title="Jason"/></a>
	                <a href="" title="Emmet"><img height="200" src="../../recursos/img/perro4.jpg" alt="Perro - Emmet" title="Emme1"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro3.jpg" alt="Perro - Emmet" title="Emmet2"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro2.jpg" alt="Perro - Emmet" title="Emmet3"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro3.jpg" alt="Perro - Emmet" title="Emmet4"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro4.jpg" alt="Perro - Emmet" title="Emmet5"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro2.jpg" alt="Perro - Emmet" title="Emmet6"/></a>
					<a href="" title="Emmet"><img height="200" src="../../recursos/img/perro1.jpg" alt="Perro - Emmet" title="Emmet7"/></a>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
   </body>
</html>