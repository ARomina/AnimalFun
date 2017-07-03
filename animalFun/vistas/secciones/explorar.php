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



  if(isset($_SESSION['usuario'])){
      $usuario = $_SESSION['usuario'];
      $id = $_SESSION['id'];
  }

  //Inicializo variables
  $idMascota = "";
  $nombre = "";
  $foto = "";

  //Query
  $sql = "SELECT mascota.id, mascota.nombre, mascota.foto,  tipo.descripcion AS tipo FROM tipo JOIN mascota ON mascota.tipo=tipo.id JOIN raza ON mascota.raza=raza.id JOIN tamano  ON mascota.tamano=tamano.id  ";

  $sql2 = "SELECT mascota.id, mascota.nombre, mascota.foto,  raza.descripcion AS raza FROM raza JOIN mascota ON mascota.raza=raza.id JOIN tipo ON mascota.tipo=tipo.id JOIN tamano  ON mascota.tamano=tamano.id  ";

  $sql3 = "SELECT mascota.id, mascota.nombre, mascota.foto,  tamano.descripcion AS tamano FROM tamano JOIN mascota ON mascota.tamano=tamano.id JOIN raza ON mascota.raza=raza.id JOIN tipo  ON mascota.tipo=tipo.id  ";

  
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
		

}

#container {
    border: 1px solid transparent;
    padding: 3px;
}

.item {
    width: 300px;
    height: 400px;

   

}



.isotope-item {
    z-index: 2;
}

.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}

.isotope,
.isotope .isotope-item {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    transition-duration: 0.8s;
}

.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    transition-property: height, width;
}

.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    transition-property: transform, opacity;
}

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    transition-duration: 0s;
}

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
	
	
	
	
<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='https://isotope.metafizzy.co/v1/jquery.isotope.min.js'></script>
	
	
		<div class="row">
		<hr>
		<h2 align="center" >Filtra tus busquedas</h2> 
		<div id="filters">
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
								   			echo '<option value=".'.$tiposMascota[$i]['descripcion'].'">'.$tiposMascota[$i]['descripcion'].'</option>';
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
								   		echo '<option value=".'.$razasMascota[$i]['descripcion'].'">'.$razasMascota[$i]['descripcion'].'</option>';
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
								   		echo '<option value=".'.$tamanosMascota[$i]['descripcion'].'">'.$tamanosMascota[$i]['descripcion'].'</option>';
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
	</div>
	<div id="container">
	<div class="row">
	<div class="col-md-12">
	<?php
	//Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
    
            $stmt->bind_result($idMascota, $nombre, $foto,$tipo);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo ' 
		
						<a title="'.$nombre.'" href="../usuarios/verPerfilMascotaPublico.php?idMascota='.$idMascota.'">
                           <div class="item '.$tipo.'"> <img   class="thumbnail img-responsive" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/></div>
                        </a>
                    
					  ';
              }
            }
  }
	?>
	</div>

	<div class="col-md-12">
	<?php
	//Preparo la query
  if($stmt = $con->prepare($sql2)){

            //Seteo parámetros
    
            $stmt->bind_result($idMascota, $nombre, $foto, $raza);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo ' 
		
						<a title="'.$nombre.'" href="../usuarios/verPerfilMascotaPublico.php?idMascota='.$idMascota.'">
                           <div class="item '.$raza.'"> <img   class="thumbnail img-responsive" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/></div>
                        </a>
                    
					  ';
              }
            }
  }
	?>
	</div>

	<div class="col-md-12">
	<?php
	//Preparo la query
  if($stmt = $con->prepare($sql3)){

            //Seteo parámetros
    
            $stmt->bind_result($idMascota, $nombre, $foto,$tamano);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo ' 
		
						<a title="'.$nombre.'" href="../usuarios/verPerfilMascotaPublico.php?idMascota='.$idMascota.'">
                           <div class="item '.$tamano.'"> <img   class="thumbnail img-responsive" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/></div>
                        </a>
                    
					  ';
              }
            }
  }
	?>
	</div>


	</div>
	</div>
	  <!-- Sector mascotas en adopción -->
        
     <!-- <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/1.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/2.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Aladin" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/3.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Aladin" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/6.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/7.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/8.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/9.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/10.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/11.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="../../recursos/img/mascotas/12.jpg"></a></div>-->
   
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
	
	<!-- 	<div class="row">
			<div class="col-6 col-sm-12" align="center">
				<button type="button" class="btn btn-success btn-lg">Ver más</button>
			</div> -->
			
		</div>
		<hr>
		<div class="container">
			
				<h2 align="center" >Conocés a alguien registrado en nuestra página?</h2> 
			
		   <div class="col-md-4 col-md-offset-4 divBuscador">
							<form>
								<div class="form-group input-group">
									<input type="text" class="form-control" placeholder="Buscá al usuario" id="usuarioBuscado">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button" id="botonBuscar"><i class="fa fa-search"></i></button>
										</span>
								</div>
							</form>
						</div>

						<div class="col-md-12" id="divBusquedaUsuario"></div>
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
     <!-- <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>-->
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
	<script>
	$(function() {

    var $container = $('#container'),
        $select = $('#filters select');

    $container.isotope({
        itemSelector: '.item'
    });

    $select.change(function() {
        var filters = $(this).val();
;
        $container.isotope({
            filter: filters
        });
    });

});
	</script>

	 <!-- Script para mandar el usuario buscado -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#botonBuscar").click(function(){
          var usuarioBuscado = $("#usuarioBuscado").val();

          $.ajax({
            type: "POST",
            url: "../../extras/buscarUsuario.php",
            data: {usuarioBuscado: usuarioBuscado},
            cache: false,
            success: function(html){
              $("#divBusquedaUsuario").html(html);
            } 
            });
        });
      });
    </script>

   </body>
</html>