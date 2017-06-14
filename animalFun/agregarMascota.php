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

  //Query para traer la foto de mascota
  $sql = "SELECT foto from mascota WHERE usuario = '$usuario'";

  $resultado = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($resultado);

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
            <form class="form-horizontal" role="form">
              <fieldset>
                 <!-- Form Name -->
                <legend>Foto de perfil de mi mascota</legend>
                   <!--<div id="fotoPerfil" class="divCirculo"></div>-->
                     <!--<?php
                     /*echo '<img src='; 
                        if(isset($row['foto']) && !empty($row['foto'])){
                           echo '"'.str_replace('../', '', $row['foto']).'"';
                        }else{
                          echo 'img/avatar-placeholder.jpg';
                        }
                        echo ' height="250" width="250" class="center-block">';*/
                      ?>-->
                      <img src="img/avatar-placeholder.jpg" class="center-block"/>
              </fieldset>
            </form>
         

          <div class="form-group">
            <!--<div class="col-md-4 col-md-push-8">-->
             <div class="col-md-12 text-center">
              <!--<div class="pull-right"-->
           <!--      <button type="submit" class="btn btn-default">Cancel</button> -->
                <form action="extras/editarFotoPerfilMascota.php" method="POST" enctype="multipart/form-data" class="center-block">
                  <input name="fotoMascota" type="file" id="fotoMascota">
                 <!--  <input name="upload" type="submit" class="btn boton2" id="upload" value="Agregar foto de perfil"> -->
                </form>
              <!--</div>-->
            </div>
          </div>
          </div>

      <div class="col-md-8">
        <form class="form-horizontal" role="form">

          <fieldset>

            <legend>Datos de la mascota</legend>
            <div class="col-md-6">

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Nombre </label>
                <div class="col-sm-10">
                  <input type="text" placeholder="" class="form-control">
                </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="tipo">Tipo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="tipo">
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
                         <span class="alerta" id="alertaTipo">Debe seleccionar una opción</span>
                      </div>
                    </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="raza">Raza </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="raza">
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
                         <span class="alerta" id="alertaRaza">Debe seleccionar una opción</span>
                      </div>
                    </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="tamano">Tamaño </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="tamano">
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
                         <span class="alerta" id="alertaTamano">Debe seleccionar una opción</span>
                      </div>
                    </div>

              </div>



              <div class="col-md-6">

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="sexo">Sexo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="sexo" class="form-control">
                             <?php
                                $cantSexosMascota = count($sexoMascota);
                                if($cantSexosMascota > 0){
                                  echo '<option value="0" disabled="disabled" selected="selected">Seleccione un sexo</option>';
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
      
              <hr>
              <br>
              <br>

              <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label" for="caracteristicas">Otras características</label>
                    <textarea class="form-control" id="caracteristicas" rows="4"></textarea>
                  </div>
              </div>

              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                    <button type="button" class="btn btn-default">Cancelar</button>
                    <button type="button" id="botonAgregarMascota" class="btn boton2 textoBoldBlanco">Agregar mascota <i class="fa fa-plus" aria-hidden="true" id="icono"></i></button>
                  </div>
                </div>
              </div>

            </fieldset>
          </form>
          </div>
        </div>

      </div>


         
          
         

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

    <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>

    <!-- Script para la rotacion del icono del boton -->
    <script type="text/javascript">
     /* $("#botonAgregarMascota").click(function(){
       $(this).find('i').toggleClass('pressed');
      });*/
        $('#botonAgregarMascota').click(function() {
            $(this).find('i').toggleClass('pressed');
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