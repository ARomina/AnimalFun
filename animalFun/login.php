<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo -->

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
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosMenuPaginas.css">
    <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
    
    <!-- MENU -->
    <?php include("menuPaginas.php");?>
    <!--Fin menu-->
	 
  <div class="wrap">
  <!-- Sección: Login -->
  <div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="text-center textoBold">Para continuar, inicia sesión</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-6">
            <div class="well">
					    <form class="sa-innate-form" action="" method="POST">
							            <label for="usuario" class="control-label">Usuario </label>
							            <input type="text" name="usuario" class="form-control" id="usuario"  value="" required="" title="Ppor favor, ingrese su usuario" placeholder="usuario"/>
										      <span class="alerta" id="alertaUsuario">El usuario no puede estar vacío y debe tener entre 4 y 10 caracteres</span>
							           	<label>Contraseña</label>
							            <input  class="form-control" type="password" name="password" placeholder="password"  value="" required="" title="Por favor, ingrese su contraseña" for="password" id="password" />
							            <span class="alerta" id="alertaContrasenia">La contraseña no puede estar vacía y debe tener entre 6 y 8 caracteres</span>
							            <div class="text-center">
								            <a href="#" class="textoNaranja">Oops, ¡me olvidé la contraseña!</a>
								          </div>
      										<div id="loginErrorMsg" class="alert alert-error hide">Contraseña o usuario incorrectos</div>
      										<div class="checkbox">
                            <label>
                              <input type="checkbox" name="remember" id="remember"> Recordarme
                            </label>
                          </div>
							            <button type="button" value="login" name="submit" class="btn btn-block botonVerde" onClick="login()">Entrar</button>
						  </form>
            </div>
          </div>
          <div class="col-xs-6">
            <p class="lead">¡Regístrate ahora <span class="text-success2">GRATIS</span>!</p>
              <ul class="list-unstyled" id="listaDescripcionesRegistro">
                <li><span class="fa fa-paw text-success2"></span> Cientos de mascotas</li>
                <li><span class="fa fa-paw text-success2"></span> Increíbles historias</li>
                <li><span class="fa fa-paw text-success2"></span> ¡Búscale pareja a tu mascota!</li>
                <li><span class="fa fa-paw text-success2"></span> Comparte sus experiencias</li>
                <li><span class="fa fa-paw text-success2"></span> Valora las mascotas que más te gusten</li>
                <li><span class="fa fa-paw text-success2"></span> ¡Haz muchos amigos!</li>
              </ul>
            <p id="textoBotonUnirse"><a href="unirse.php" class="btn btn-block botonNaranja">¡Unirme!</a></p>
  					<div class="social-login">
              <p> - - - - - Regístrate con tu cuenta preferida - - - - - </p>
      		    <ul>
                <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
                <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
              </ul>
            </div>
          </div>
              </div>
          </div>
      </div>
  </div>
  </div><!-- div wrap -->

  <div class="push"></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center textoBold">Login</h4>
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
    
   <!--  <div> -->

    <!-- FOOTER -->
     
      <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--   <script type="text/javascript" src="js/responsee.js"></script> -->
    	<script type="text/javascript" src="js/loginValidacion.js"></script>	 
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