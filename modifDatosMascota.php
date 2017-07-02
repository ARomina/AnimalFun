<?php

	include_once "../../conexion.php";

  	session_start();

	if(isset($_SESSION['usuario'])){
	   $usuario = $_SESSION['usuario'];
	   $idUsuario = $_SESSION['id'];
	}

	$idMascota = $_GET['idMascota'];

	//Query para traer el nombre de la mascota
	$sql = "SELECT nombre, foto from mascota WHERE id = '$idMascota'";

	$resultado = mysqli_query($con, $sql);

	while($row = $resultado->fetch_assoc()){
        $nombre = $row['nombre'];
        $foto = $row['foto'];
  }

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

  //Query RAZA de mascota
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

  //Query TAMAÑO de mascota
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

  //Array SEXO de mascota
  $sexoMascota = array();

  //Query SEXO de mascota
  $sql = "SELECT * FROM sexo";
  $resultado = $con->query($sql);

  if($resultado->num_rows > 0){
    $i = 0;
    while($row = $resultado->fetch_assoc()){
      $sexoMascota[$i]['id'] = $row["id"];
      $sexoMascota[$i]['descripcion'] = $row["descripcion"];
      $i++;
    }
  }

  //Array de ESTADOS de mascota
  $estadosMascota = array();

  //Query ESTADO de mascota
  $sql = "SELECT * FROM estado";
  $resultado = $con->query($sql);

  if($resultado->num_rows > 0){
    $i = 0;
    while($row = $resultado->fetch_assoc()){
      $estadosMascota[$i]['id'] = $row["id"];
      $estadosMascota[$i]['descripcion'] = $row["descripcion"];
      $i++;
    }
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

    <!-- Sección Perfil Mascota -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Modificar: <?php echo $nombre;?></h2>
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

            <div class="form-group">
             <div class="col-md-12 text-center">
                <form action="../../extras/editarFotoPerfilMascota.php" method="POST" enctype="multipart/form-data" class="center-block">
                  <input name="fotoMascota" type="file" id="fotoMascota">
                  <input name="upload" type="submit" class="btn boton2" id="upload" value="Cambiar foto de perfil">
                </form>
            </div>
          </div>
          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form">
                <fieldset>

                  <legend>Datos</legend>

                    <?php include("../../extras/editarDatosMascota.php");?>

                  </fieldset>
              </form>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <a href="../../vistas/usuarios/modifDatosUsuario.php" class="btn boton2">Modificar datos</a>
              </div>
            </div>
          </div>
      </div><!-- div container -->

      </div><!-- div wrap -->

      <div id="push"></div>

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

       <!-- Script para mandar el id de los seleccionado en el select TIPO y llenar el select RAZA -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#tipo").change(function(){
          var idTipo = $(this).val();

          $.ajax({
            type: "POST",
            url: "../../extras/mostrarRazas.php",
            data: {idTipo: idTipo},
            cache: false,
            success: function(html){
              $("#raza").html(html);
            } 
            });
        });
      });
    </script>
      
   </body>
</html>