<?php

  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas */

  include_once "conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
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
    <link rel="stylesheet" href="css/estilosFotosBootstrap.css">

   </head>
   <body>

    <!-- MENU -->
    <?php include("menuPaginas.php");?>

    <div id="wrap">

     <!-- Sección -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mis mascotas</h2>
            </div>
      </div>

      <!--<div class="container">-->

      <div class="container" id="contenedorGeneralBody">
        <div class="row">
          <div class="col-md-12">
            <br>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Alby" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gato_ocicat.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Albus" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perro.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Dumbledore" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gatopersa3.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Newt" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350diamante3.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Thomas" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gatobirmania.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Minho" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350canariopeludito.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Draco" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perro04.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Scorpius" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perrojugando.jpg">
                  </a>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
             <hr>

             <div class="col-md-12 text-center">
               <h2 class="titulo">¿Tenés más mascotas? ¡Sumalas!</h2><br>
               <a href="agregarMascota.php" class="btn boton2">Agregar una mascota nueva <i class="fa fa-paw" aria-hidden="true"></i></a>

            </div>
          </div>
        </div>
      </div><!-- div container -->

      </div><!-- div wrap -->

      <div id="push"></div>

        <!--   <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right"> -->
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
               <!--  <a href="modifDatosUsuario.php" class="btn boton2">Modificar datos</a>
              </div>
            </div>
          </div>
        </div> -->
      <!--</div><! div container -->

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

    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
            <h3 class="modal-title">Heading</h3>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
		   <div class="pull-left"><a href="#" class="btn btn-success" data-dismiss="modal">Generar QR</a></div>
            <a href="#" class="btn boton2" data-dismiss="modal">Editar datos</a>
            <a href="#" class="btn btn-default" data-dismiss="modal">Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  

    <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>

    <!-- Script para el modal -->
    <script type="text/javascript">
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