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
	<style>
		.modal-dialog {width:600px;}
		.thumbnail {margin-bottom:6px;}
	</style>
   </head>
   <body>
	
    <!-- MENU -->
		<?php include("../../vistas/menuPaginas.php");?>

		    <div class="row">
				<div class="col-md-12 text-center">
	               <h2 class="titulo-central">Explora nuestra comunidad! Buscá entre nuestras mascotas <!-- <i class="fa fa-chevron-down"></i> --></h2>
	            </div>
	    	</div>
	
	<div class="container">
		<div class="row">
		<hr>
		<h2 align="center" >Filtra tus busquedas</h2> 
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
        
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/2255EE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/777"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/EEE"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/449955/FFF"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/DDD"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="//placehold.it/600x350/992233"></a></div>
   
    <hr>
    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
	</div>
   </div>
  </div>
</div>
	
		<div class="row">
			<div class="col-6 col-sm-12" align="center">
				<button type="button" class="btn btn-success btn-lg">Ver más</button>
			</div>
			
		</div>
		<hr>
		<div class="container">
			
				<h2 align="center" >Conocés a alguien registrado en nuestra página?</h2> 
			
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
       <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	<script>
	$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});
	</script>
   </body>
</html>