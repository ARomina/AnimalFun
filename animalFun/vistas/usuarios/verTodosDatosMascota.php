<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez,Pablo */

  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

  $idMascota = $_GET['idMascota'];

  //Query para traer el nombre de la mascota
  $sql = "SELECT nombre, foto from mascota WHERE id = '$idMascota'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $nombre = $row['nombre'];
        $foto = $row['foto'];
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
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

    <div id="wrap">

    <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Datos de <?php echo $nombre;?></h2>
            </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4 center-block">
            <form class="form-horizontal" role="form">
              <fieldset>
                <legend>Foto de perfil</legend>
                      <img src="<?php 
                        if(isset($foto)){
                          echo str_replace('../recursos/', '../../recursos/', $foto);
                        }else{
                          echo '../../recursos/img/avatar-placeholder.jpg';
                        }
                        ?>" height="250" width="250" class="center-block">
              </fieldset>
            </form>

           <!--  <div class="form-group">
             <div class="col-md-12 text-center">
                <form action="../../extras/editarFotoMascota.php" method="POST" enctype="multipart/form-data" class="center-block">
                  <input name="fotoMascota" type="file" id="fotoMascota">
                  <input name="upload" type="submit" class="btn boton2" id="upload" value="Cambiar foto de perfil">
                </form>
            </div>
          </div> -->
          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form">
                <fieldset>

                  <legend>Información</legend>

                    <?php include("../../extras/verDatosMascota.php");?>

                  </fieldset>
              </form>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <a href="../../vistas/usuarios/modifDatosMascota.php?idMascota=<?php echo $idMascota?>" class="btn boton2">Modificar datos</a>
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