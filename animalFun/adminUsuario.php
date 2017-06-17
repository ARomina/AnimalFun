<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas */

  include_once "conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

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
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosPerfilUsuario.css">
    <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
    <?php include("menuPaginas.php");?>

    <div id="wrap">

    <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mis datos</h2>
            </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4 center-block">
            <form class="form-horizontal" role="form">
              <fieldset>
                 <!-- Form Name -->
                <legend>Mi foto de perfil</legend>
                   <!--<div id="fotoPerfil" class="divCirculo"></div>-->
                    <!--<form name="" method="post" action="editarFotoPerfilUsuario.php">-->
                      <img src="<?php 
                        if(isset($fotoPerfilUsuario)){
                           echo str_replace('../', '', $fotoPerfilUsuario);
                        }else{
                          echo 'img/avatar-placeholder.jpg';
                        }
                        ?>" height="250" width="250" class="center-block">
                    <!--</form>-->
              </fieldset>
            </form>

            <div class="form-group">
            <!--<div class="col-md-4 col-md-push-8">-->
             <div class="col-md-12 text-center">
              <!--<div class="pull-right"-->
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <form action="extras/editarFotoPerfilUsuario.php" method="POST" enctype="multipart/form-data" class="center-block">
                  <input name="userfile" type="file" id="userfile">
                  <!--<a href="extras/editarFotoPerfilUsuario.php" class="btn boton2" name="upload" value="upload">Cambiar foto de perfil</a>-->
                  <input name="upload" type="submit" class="btn boton2" id="upload" value="Cambiar foto de perfil">
                </form>
              <!--</div>-->
            </div>
          </div>
          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form">
                <fieldset>

                  <legend>Mi información personal</legend>

                    <?php include("extras/verDatosUsuario.php");?>

                  </fieldset>
              </form>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <a href="modifDatosUsuario.php" class="btn boton2">Modificar datos</a>
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

    <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
	
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

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script>
 -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
   </body>
</html>