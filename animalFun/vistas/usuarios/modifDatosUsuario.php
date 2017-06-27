<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

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
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
  
    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

    <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Modificar: Mis datos</h2>
            </div>
      </div>

      <div class="container" id="contenedorGeneralBody">
        <div class="row">
          <div class="col-md-12 col-md-push-">
            <form class="form-horizontal" role="form">
                <fieldset>

                  <legend>Mi información personal a editar</legend>

                    <?php include("../../extras/editarDatosUsuario.php");?>

                  </fieldset>
              </form>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <button type="button" class="btn boton2" onClick="modificarDatosUsuario()">Modificar datos</button>
              </div>
            </div>
          </div>
      </div><!-- div container -->

      </div><!-- div wrap -->

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
    <script type="text/javascript" src="../../recursos/js/modificarDatosUsuario.js"></script>
       <!-- /.container -->
	 
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
    <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center textoBold">Modificación</h4>
              </div>
              <div class="modal-body text-center">
                <p id="mensajeModal"></p>
              </div>
            </div>
          </div>
      </div>
      
   </body>
</html>