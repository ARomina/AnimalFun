<?php

  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    $fotoPerfilUsuario = $_SESSION['foto'];
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

  //Query TAMAÑOS de mascota
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
    <link rel="stylesheet" href="../../recursos/css/estilosFotosBootstrap.css">

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

     <!-- Sección Perfil Dueño -->
      <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Agregar nueva mascota</h2>
            </div>
      </div>

      
      <!--<div class="container">-->

      <div class="container" id="contenedorGeneralBody">
        <div class="row"><br>
          <div class="col-md-4">
            <form name="formularioMascota" id="formularioMascota" class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
              <fieldset>
                <legend>Foto de perfil de mi mascota</legend>
                <img id="fotoMascotaTemp" src="../../recursos/img/avatar-placeholder.jpg" class="center-block"/>
              </fieldset>

          <div class="form-group">
             <div class="col-md-12 text-center">
                  <input name="fotoMascota" type="file" id="fotoMascota" class="center-block">
                  <span class="alerta" id="alertaFotoMascota">Debe subir una imagen</span>
            </div>
          </div>
          </div>

      <div class="col-md-8">
          <fieldset>
              <legend>Datos de la mascota</legend>
            <div class="col-md-6">

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Nombre </label>
                <div class="col-sm-10">
                  <input type="text" placeholder="" class="form-control" id="nombre" name="nombre">
                  <span class="alerta" id="alertaNombreMascota">En nombre no puede estar vacío, y solo puede contener letras y espacios</span>
                </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="tipo">Tipo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="tipo" name="tipo">
                            <?php
                                $cantTiposMascota = count($tiposMascota);
                                if($cantTiposMascota > 0){
                                echo '<option value="" disabled="disabled" selected="selected">Seleccione un tipo</option>';
                                for($i=0; $i<$cantTiposMascota; $i++){
                                  echo '<option value="'.$tiposMascota[$i]['id'].'">'.$tiposMascota[$i]['descripcion'].'</option>';
                                  }
                                }else{
                                  echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                            ?>
                         </select>
                         <span class="alerta" id="alertaTipo">Debe seleccionar una opción</span>
                      </div>
                    </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="raza">Raza </label>
                      <div class="col-sm-10">
                        <select class="form-control" id="raza" name="raza">
                          <option selected="selected" disabled value="">Seleccione una raza</option>
                        </select>
                        <span class="alerta" id="alertaRaza">Debe seleccionar una opción</span>
                      </div>
                    </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="tamano">Tamaño </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="tamano" name="tamano">
                            <?php
                                $cantTamanosMascota = count($tamanosMascota);
                                if($cantTamanosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un tamaño</option>';
                                  for($i=0; $i<$cantTamanosMascota; $i++){
                                    echo '<option value="'.$tamanosMascota[$i]['id'].'">'.$tamanosMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                            ?>
                         </select>
                         <span class="alerta" id="alertaTamano">Debe seleccionar una opción</span>
                      </div>
                    </div>

              </div>

              <div class="col-md-6">

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="sexo">Sexo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="sexo" name="sexo" class="form-control">
                             <?php
                                $cantSexosMascota = count($sexoMascota);
                                if($cantSexosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un sexo</option>';
                                  for($i=0; $i<$cantSexosMascota; $i++){
                                    echo '<option value="'.$sexoMascota[$i]['id'].'">'.$sexoMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                            ?>
                         </select>
                         <span class="alerta" id="alertaSexo">Debe seleccionar una opción</span>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="estado">Estado </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="estado" name="estado" class="form-control">
                             <?php
                                $cantEstadosMascota = count($estadosMascota);
                                if($cantEstadosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un estado</option>';
                                  for($i=0; $i<$cantEstadosMascota; $i++){
                                    echo '<option value="'.$estadosMascota[$i]['id'].'">'.$estadosMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                            ?>
                         </select>
                         <span class="alerta" id="alertaEstado">Debe seleccionar una opción</span>
                      </div>
                    </div>

              <hr>
              <br>
              <br>

              <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="caracteristicas">Otras características</label>
                    <textarea class="form-control" id="caracteristicas" name="caracteristicas" rows="4"></textarea>
                  </div>
              </div>

              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                    <button type="button" class="btn btn-default">Cancelar</button>
                    <button type="button" id="botonAgregarMascota" class="btn boton2 textoBoldBlanco" onclick="registroMascota()">Agregar mascota <i class="fa fa-plus" aria-hidden="true" id="icono"></i></button>
                  </div>
                </div>
              </div>

            </fieldset>
            </div>
          </form>
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

    <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center textoBold">Registro de mascota</h4>
              </div>
              <div class="modal-body text-center">
                <p id="mensajeModal"></p>
              </div>
            </div>
          </div>
      </div>

    <!-- /.container -->

    <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="../../recursos/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../recursos/js/carousel.js"></script>
    <script type="text/javascript" src="../../recursos/js/registroMascota.js"></script>

    <!-- Script para la rotacion del icono del boton -->
    <script type="text/javascript">
        $('#botonAgregarMascota').click(function() {
            $(this).find('i').toggleClass('pressed');
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

    <!-- Para cambiar la foto temporalmente al seleccionar una para subir-->
    <script>
      function readURL(input) {

          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#fotoMascotaTemp').attr('src', e.target.result);
                  $('#fotoMascotaTemp').width(263);
                  $('#fotoMascotaTemp').height(263);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }

     $("#fotoMascota").change(function(){
          readURL(this);
      });
    </script>

   </body>
</html>