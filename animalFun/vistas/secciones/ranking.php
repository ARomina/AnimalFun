<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */


  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

 
  //Query para traer el nombre de la mascota
  $sql = "SELECT count(*) AS cantidad FROM `post`";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $post = $row['cantidad'];
     
    }
  //Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM valoracion JOIN post ON valoracion.post=post.id JOIN mascota ON post.mascota=mascota.id JOIN tipo ON mascota.tipo=tipo.id where tipo.descripcion='perro'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $guaus = $row['cantidad'];
     
    }
	//Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM valoracion JOIN post ON valoracion.post=post.id JOIN mascota ON post.mascota=mascota.id JOIN tipo ON mascota.tipo=tipo.id where tipo.descripcion='gato'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $miaus = $row['cantidad'];
     
    }
//Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM valoracion JOIN post ON valoracion.post=post.id JOIN mascota ON post.mascota=mascota.id JOIN tipo ON mascota.tipo=tipo.id where tipo.descripcion='gluglus'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $gluglus = $row['cantidad'];
     
    }
//Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM valoracion JOIN post ON valoracion.post=post.id JOIN mascota ON post.mascota=mascota.id JOIN tipo ON mascota.tipo=tipo.id where tipo.descripcion='pios'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $pios = $row['cantidad'];
     
    }
//Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM cita";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $citas = $row['cantidad'];
     
    }
//Query para traer el nombre de la mascota
  $sql = "SELECT COUNT(*) AS cantidad FROM adopcion";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $adopcion = $row['cantidad'];
     
    }
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="../../recursos/../../recursos/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../../recursos/../../recursos/img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../../recursos/css/bootstrap.css">
	  <style>
 /*    --------------------------------------------------
	:: General
	-------------------------------------------------- */

.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */

.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
	top: 3px;
	left: 3.5px;
	content: '\e013';
	color: #fff;
	font-size: 11px;
	font-family: 'Glyphicons Halflings';
	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}

.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.semanal {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
	  </style>
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
    <link rel="stylesheet" href="../../recursos/css/estilos.css">
    <link rel="stylesheet" href="../../recursos/css/estilosMenuPaginas.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>
				<div class="col-md-12 text-center">
	               <h2 class="titulo-central">Rankings <!-- <i class="fa fa-chevron-down"></i> --></h2>
	            </div>
				
    <div id="wrap">
			
    <div class="col col-md-4">
		<div class="row">

			<section class="content">
			<h1>Ranking de popularidad</h1>
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-body">
						Puesto
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter " data-target="semanal">Semanal</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="mensual">Mensual</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">General</button>
								
							</div>
						</div>
						
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
								
<?php

	$sql = "SELECT M.id,M.nombre,M.foto,(SELECT COUNT(*)
					  FROM valoracion v1
					  JOIN post p1 ON v1.post=p1.id
					  WHERE p1.mascota=M.id)*10+
					 (SELECT COUNT(*)
					  FROM visita
					  WHERE mascota=M.id)+
					 (SELECT COUNT(*)
					  FROM seguimiento
					  WHERE mascota=M.id
					 )*50 AS puntaje
			FROM mascota M
			ORDER BY puntaje DESC
			LIMIT 10";

			
			
			
			
			

			
			
			
			
	$puesto = 1;

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){

	    		echo '
	                          <tr data-status="semanal">
	                            
								<td>
										
	                                  <div class="row">
	                                  	   <div class="col-md-3" style="padding-top:5%;">
	                                       		<h3><p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.
	                                       			$puesto.'° - </p></h3>
	                                       </div>
										   <div class="media">
											
												<div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
										
	                                  	   <div class="col-md-3 center-block">
		                                       
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['nombre'].'</p>
	                                       </div>
										   </div>
	                                       
	                                 </div> 
	                             </td>
	                           </tr>';
	                           $puesto+=1;
	    	}

   }

?>
									
								<!--/* 	<tr data-status="mensual">
										<td>
											<div class="ckbox">
												<h1>1</h1>
											</div>
										</td>
										<td>
										</td>
										<td>
											<div class="media">
											
												<div class="pull-left">
													<img src="../../recursos/img/cat-icon.png" height="45px">
												</div>
												<div class="media-body">
													<span class=" pull-right"><h1>68</h1></span>
													<span class=" pull-left"><h1>Marley</h1></span>
								
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="mensual">
										<td>
											<div class="ckbox">
												<h1>2</h1>
											</div>
										</td>
										<td>
										</td>
										<td>
											<div class="media">
											
												<div class="pull-left">
													<img src="../../recursos/img/dog-icon.png" height="45px">
												</div>
												<div class="media-body">
													<span class=" pull-right"><h1>65</h1></span>
													<span class=" pull-left"><h1>maty</h1></span>
								
												</div>
											</div>
										</td>
									</tr>
									
									<tr data-status="mensual">
										<td>
											<div class="ckbox">
												<h1>3</h1>
											</div>
										</td>
										<td>
										</td>
										<td>
											<div class="media">
											
												<div class="pull-left">
													<img src="../../recursos/img/cat-icon.png" height="45px">
												</div>
												<div class="media-body">
													<span class=" pull-right"><h1>32</h1></span>
													<span class=" pull-left"><h1>husky</h1></span>
								
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="mensual">
										<td>
											<div class="ckbox">
												<h3>4</h3>
											</div>
										</td>
										<td>
										</td>
										<td>
											<div class="media">
											
												<div class="pull-left">
													<img src="../../recursos/img/cat-icon.png" height="45px">
												</div>
												<div class="media-body">
													<span class=" pull-right"><h3>53</h3></span>
													<span class=" pull-left"><h3>lola</h3></span>
								
												</div>
											</div>
										</td>
									</tr>
									 */-->
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</section>

		
		</div>
	</div>
	    <div class="col col-md-4">
		<div class="row">

						<section class="content">
			<h1>Ranking de likes</h1>
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-body">
						Puesto
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter2 " data-target="popularessemanal">Semanal</button>
								<button type="button" class="btn btn-warning btn-filter2" data-target="popularmensual">Mensual</button>
								<button type="button" class="btn btn-danger btn-filter2" data-target="popularcancelado">General</button>
								
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<?php

	$sql = "SELECT mascota.id,mascota.nombre, mascota.foto, COUNT(*) AS puntaje 
	FROM valoracion JOIN post ON valoracion.post=post.id 
	JOIN mascota ON post.mascota=mascota.id 
	JOIN tipo ON mascota.tipo=tipo.id 
	GROUP BY mascota.id 
	ORDER BY puntaje DESC LIMIT 10";

	$puesto = 1;

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){

	    		echo '
	                          <tr data-status="popularessemanal">
	                            
								<td>
										
	                                  <div class="row">
	                                  	   <div class="col-md-3" style="padding-top:5%;">
	                                       		<h3><p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.
	                                       			$puesto.'° - </p></h3>
	                                       </div>
										   <div class="media">
											
												<div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
										
	                                  	   <div class="col-md-3 center-block">
		                                       
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['nombre'].'</p>
	                                       </div>
										   </div>
	                                       
	                                 </div> 
	                             </td>
	                           </tr>';
	                           $puesto+=1;
	    	}

   }

?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		</div>
	</div>
		    <div class="col col-md-4">
		<div class="row">

							</section>
			<section class="content">
			<h1>Ranking de seguidores</h1>
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-body">
						Puesto
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter3 " data-target="seguidoressemanal">Semanal</button>
								<button type="button" class="btn btn-warning btn-filter3" data-target="seguidoresmensual">Mensual</button>
								<button type="button" class="btn btn-danger btn-filter3" data-target="seguidorescancelado">General</button>
								
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<?php

	$sql = "
	
	SELECT mascota.id,mascota.nombre, mascota.foto, COUNT(*) AS puntaje  
	FROM seguimiento join mascota ON seguimiento.mascota=mascota.id
	GROUP BY mascota.id
	ORDER BY puntaje DESC
	LIMIT 10
	";

	$puesto = 1;

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){

	    		echo '
	                          <tr data-status="seguidoressemanal">
	                            
								<td>
										
	                                  <div class="row">
	                                  	   <div class="col-md-3" style="padding-top:5%;">
	                                       		<h3><p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.
	                                       			$puesto.'° - </p></h3>
	                                       </div>
										   <div class="media">
											
												<div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
										
	                                  	   <div class="col-md-3 center-block">
		                                       
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['nombre'].'</p>
	                                       </div>
										   </div>
	                                       
	                                 </div> 
	                             </td>
	                           </tr>';
	                           $puesto+=1;
	    	}

   }

?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		</div>
	</div>
	<div class="col-md-4">
		   <div class="panel panel-default">
			  <div class="panel-heading">Porcentajes de mascotas</div>
			 <div class="panel-body"><?php include_once('../usuarios/ranktipos.php')?></div>
			</div>	
			</div>
			<div class="col-md-4">
		   <div class="panel panel-default">
			  <div class="panel-heading">Estadisticas de likes por tipo</div>
			  <div class="panel-body"><?php include_once('../usuarios/ranklikes.php')?></div>
			</div>	
			</div>
			<div class="col-md-4">
		   <div class="panel panel-default">
			  <div class="panel-heading">Estadisticas Mascotas</div>
				  <div class="panel-body">
				  </br>
				  <h3>Cantidad de posteos <div class="pull-right"><span class="label label-default"><?php echo $post;?></span></div></h3>
				   <h3>Cantidad de Guaus <div class="pull-right"><span class="label label-default"><?php echo $guaus;?></span></div></h3>
				   <h3>Cantidad de Miaus <div class="pull-right"><span class="label label-default"><?php echo $miaus;?></span></div></h3>
				   <h3>Cantidad de Gluglus <div class="pull-right"><span class="label label-default"><?php echo $gluglus;?></span></div></h3>
				   <h3>Cantidad de Pios <div class="pull-right"><span class="label label-default"><?php echo $pios;?></span></div></h3>
				   <h3>Encuentros <div class="pull-right"><span class="label label-default"><?php echo $citas;?></span></div></h3>
				   <h3>Adopciones <div class="pull-right"><span class="label label-default"><?php echo $adopcion;?></span></div></h3>
					</br>
				  </div>
			</div>	
			</div>

		 
    </div><!-- div wrap -->
	
    <div id="push"></div>

    <!-- FOOTER 
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
			
			
			
			
			<script>
			$(document).ready(function () {

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
			</script>
			

			<script>
			$(document).ready(function () {

	

    $('.btn-filter2').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
			</script>
			<script>
			$(document).ready(function () {

	

    $('.btn-filter3').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
			</script>
       <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script>
 -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
   </body>
</html>