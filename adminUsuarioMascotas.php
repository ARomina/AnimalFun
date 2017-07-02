<?php

  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }

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
    <link rel="stylesheet" href="../../recursos/css/estilosFotosBootstrap.css">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

     <!-- Sección -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Mis mascotas</h2>
            </div>
      </div>

      <!--<div class="container" id="contenedorGeneralBody">-->
        <div class="row">
          <div class="col-md-12">
            <br>
              <div class="divFotosMascotas">
                    <ul class="fotos-Polaroid fotosMascotas">
                      <?php include("../../extras/verMascotas.php");?>
                    </ul>
                </div>
                <br>
            </div>
        </div>

        <div class="container" id="contenedorGeneralBody">
        <div class="row">
          <div class="col-md-12">
             <hr>

             <div class="col-md-12 text-center">
               <h2 class="titulo">¿Tenés más mascotas? ¡Sumalas!</h2><br>
               <a href="agregarMascota.php" class="btn boton2">Agregar una mascota nueva <i class="fa fa-paw" aria-hidden="true"></i></a>

            </div>
          </div>
        </div>
        </div>
      <!--</div>--><!-- div container -->

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

    <!-- Modal -->
    <!-- <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
            <h3 class="modal-title"></h3>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
		   <div class="pull-left"><a href="#" class="btn btn-success" data-dismiss="modal">Generar QR</a></div> -->
           <!--  <a href="modifDatosMascota.php?idMascota=<?php $idMascota;?>" class="btn boton2" data-dismiss="">Editar datos</a> -->
         <!--    <a href="" onclick="" class="btn boton2"id="botonEditarMascota"  data-dismiss="">Editar datos</a>
            <a href="" onclick="" class="btn boton2" data-dismiss="modal">Visitar perfil</a>
            <a href="#" class="btn btn-default" data-dismiss="modal">Cerrar</a>
          </div>
        </div>
      </div>
    </div> -->
  

    <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="../../recursos/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../recursos/js/carousel.js"></script>

    <!-- Script para el modal -->
   <!--  <script type="text/javascript">
     $(document).ready(function() {
      $('.imagenes').click(function(){
            $('.modal-body').empty();
          var title = $(this).parent('a').attr("title");
          $('.modal-title').html(title);
          $($(this).parents('div').html()).appendTo('.modal-body');
          $('#myModal').modal({show:true});
      });
      });
   </script> -->
  
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

   </body>
</html>