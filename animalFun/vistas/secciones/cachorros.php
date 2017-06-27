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
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
	
    <!-- MENU -->
		<?php include("../../vistas/menuPaginas.php");?>

		  <div class="row">
			  <div class="col-md-12 text-center">
          <h2 class="titulo-central">Queres ofrecer cachorros?<!--  <i class="fa fa-chevron-down"></i> --></h2>
        </div>
		  </div>
		  
		  <div class="container">
				<div class="row">
				<!-- 	<div class="col-4 col-sm-4"></div>
						<div class="col-md-4 offset-md-4"> -->
          
				</div>
			</div>

<div class="container" id="contenedorGeneralBody">
</br></br>
                  <form class="sa-innate-form" action="" method="POST">
                  <div class="row">
                 
                        <div class="col col-md-6">
                          <div class="row">
                          </br></br>
                           <div class="col col-md-6">
                                    <label class="form-check active">
                                     <input type="checkbox" id="macho">Machos</label>
                                     <input type="number" disabled="disabled" class="macho" />
                              </div>
                            <div class="col col-md-6">
                                     <label class="form-check active">
                                       <input type="checkbox" id="hembra">Hembras</label>
                                       <input type="number" disabled="disabled" class="hembra" />
                              </div>
                          </div>
                          </div>
                        <div class="col col-md-6">
                            <label for="edad" class="control-label">Edad</label>
                            <input type="text" name="edad" class="form-control" id="edad"  value="" required="" title="edad" placeholder="Tiempo aproximado de vida"/>
                           
                        </div>

                         <div class="col col-md-6">
                            <label for="tipo" class="control-label">Tipo </label>
                            <select class="form-control" id="exampleSelect1">
                             <option selected>Seleccione un animal</option>
                              <option>Perro</option>
                              <option>Gato</option>
                            </select>
                            <span class="alerta" id="alertaApellidoUsuario">Campo obligatorio.</span>
                          </div>

                           <div class="col col-md-6">
                          <label for="tamano" class="control-label">Tamaño </label>
                          <select class="form-control" id="exampleSelect2">
                           <option selected>Seleccione una talla</option>
                            <option>Pequeño</option>
                            <option>Mediano</option>
                            <option>Grande</option>
                          </select>
                          <span class="alerta" id="alertaApellidoUsuario">Campo obligatorio.</span>
                          </div>

                          <div class="col col-md-6">
                          <label for="raza" class="control-label">Raza </label>
                          <select class="form-control" id="exampleSelect3">
                           <option selected>Seleccione una raza</option>
                            <option>Caniche</option>
                            <option>Pastor Aleman</option>
                            <option>Labrador</option>
                            <option>Bulldog Frances</option>
                            <option>Mestizo</option>
                          </select>
                          <span class="alerta" id="alertaApellidoUsuario">Campo obligatorio.</span>
                          </div>

                      
                          </br>
                           <div class="col col-md-12">
                          <div class="row">
                                <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="recogido">Recogidos</label>   
                                </div>
                          
                                  <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="vacunas">esta/n vacunados?</label>   
                                </div>
                               
                                <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="papeles">Tiene/n papeles?</label>   
                                </div>
                               
                                <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="enfermdad">Presenta algun sintoma de alguna enfermedad?</label>   
                                </div>
                               
                                <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="enfermdad">Pedis compromiso de castracion?</label>   
                                </div>
                                
                                <div class="col col-md-6">
                                     <label class="form-check-label active">
                                       <input type="checkbox" id="enfermdad">Quisieras mantener el contacto con el futuro adoptante?</label>   
                                </div>
                                
                                </div>
                        
                  </div>
                            <div class="row">
                           <div class="col col-md-12">
                                <?php include('../../extras/fileInput.php');?>
                          </div>
                          </div>
                      <button type="button" value="ofrecer" name="submit" class="btn btn-lg btn-primary btn-block" onClick="ofrecer()">Ofrecer!</button>
                      </div>
                </form>
        </div>
</div>
<!-- Fin seccion cachorros -->	

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
       <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
      $('#hembra').click(function () {
        var checked = this.checked;
        console.log(checked);
        $('.hembra').each(function () {
            $(this).prop('disabled', !checked);
        });
      });
    </script>
    <script>
      $('#macho').click(function () {
        var checked = this.checked;
        console.log(checked);
        $('.macho').each(function () {
            $(this).prop('disabled', !checked);
        });
      });
    </script>
    <script>
        $('#propio').click(function () {
          var checked = this.checked;
          console.log(checked);
          $('.propio').each(function () {
              $(this).prop('disabled', !checked);
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
   </body>
</html>