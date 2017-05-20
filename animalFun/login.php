<?php
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="css/bootstrap.css">
      
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">

   </head>
   <body >
  
	
		<!-- MENU -->
		 <header>
			 <nav>
				<div class="line">
				   <div class="top-nav">                       
					  <div class="top-nav s-12 l-5">
						 <ul class="right top-ul chevron">
							<li><a href="../animalFun">Inicio</a>
							</li>
							<li><a href="#">¿Quiénes somos?</a>
							</li>
							<li><a href="#">Explorar</a>
							</li>
						 </ul>
					  </div>
					  <ul class="s-12 l-2">
						 <li class="logo hide-s hide-m" >
							<a href="../design/"><img src="img/logo.png"/></a>
						 </li>
					  </ul>
					  <div class="top-nav s-12 l-5">
						 <ul class="top-ul chevron">
							<li><a href="#">Unirse</a>
							</li>
							
							<li><a href="../animalFun/login.php">Iniciar sesión</a>
							</li>
							<li><a href="#">Preguntas</a>
							</li>
						 </ul> 
					  </div>
				   </div>
				</div>
			 </nav>
		  </header>
		<!-- MENU -->
	<br/><br/>
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <p>Para continuar, inicia sesion</p>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
					     <form class="sa-innate-form" action="" method="POST">
							            <label for="usuario" class="control-label">Usuario </label>
							            <input type="text" name="usuario" class="form-control" id="usuario"  value="" required="" title="Please enter your username" placeholder="username"/>
										      <span class="alerta" id="alertaUsuario">El usuario no puede estar vacío y debe tener entre 4 y 10 caracteres</span>
							           	<label>Contraseña</label>
							            <input  class="form-control" type="password" name="password" placeholder="password"  value="" required="" title="Please enter your password"for="password" id="password" />
							            <span class="alerta" id="alertaContrasenia">La contraseña no puede estar vacía y debe tener entre 6 y 8 caracteres</span>
							            <div class="text-center">
								            <a href="#" class="texto-password">Oops, ¡me olvidé la contraseña!</a>
								        </div>
										<div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
										<div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
							    <button type="button" value="login" name="submit" class="btn btn-success btn-block" onClick="login()">Entrar</button>
						</form>
                          
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Registrate ahora! <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Descripcion 1</li>
                          <li><span class="fa fa-check text-success"></span> Descripcion 2</li>
                          <li><span class="fa fa-check text-success"></span> Descripcion 3</li>
                          <li><span class="fa fa-check text-success"></span> Descripcion 4</li>
                          <li><span class="fa fa-check text-success"></span> Descripcion 5</li>
                          <li><span class="fa fa-check text-success"></span> Descripcion 6</li>
                      </ul>
                      <p><a href="./Register.jsp" class="btn btn-info btn-block">Registrarme</a></p>
					 <div class="social-login">
            <p> - - - - - Registrate con tu cuenta preferida - - - - - </p>
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
     
      <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
    	<script type="text/javascript" src="js/loginValidacion.js"></script>	  
   </body>
</html>